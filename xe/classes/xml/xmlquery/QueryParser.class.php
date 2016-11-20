<?php

    class QueryParser {

        var $queryTag;

        function QueryParser($query = NULL, $isSubQuery = false) {
	    if ($query)
		$this->queryTag = new QueryTag($query, $isSubQuery);
        }

        function getTableInfo($query_id, $table_name) {
            $column_type = array();
			$module = '';
			
            $id_args = explode('.', $query_id);
            if (count($id_args) == 2) {
                $target = 'modules';
                $module = $id_args[0];
                $id = $id_args[1];
            } elseif (count($id_args) == 3) {
                $target = $id_args[0];
                if (!in_array($target, array('modules', 'addons', 'widgets')))
                    return;
                $module = $id_args[1];
                $id = $id_args[2];
            } 

            // get column properties from the table
            $table_file = sprintf('%s%s/%s/schemas/%s.xml', _XE_PATH_, 'modules', $module, $table_name);
            if (!file_exists($table_file)) {
                $searched_list = FileHandler::readDir(_XE_PATH_ . 'modules');
                $searched_count = count($searched_list);
                for ($i = 0; $i < $searched_count; $i++) {
                    $table_file = sprintf('%s%s/%s/schemas/%s.xml', _XE_PATH_, 'modules', $searched_list[$i], $table_name);
                    if (file_exists($table_file))
                        break;
                }
            }

            if (file_exists($table_file)) {
                $table_xml = FileHandler::readFile($table_file);
                $xml_parser = new XmlParser();
                $table_obj = $xml_parser->parse($table_xml);
                if ($table_obj->table) {
                    if (isset($table_obj->table->column) && !is_array($table_obj->table->column)) {
                        $table_obj->table->column = array($table_obj->table->column);
                    }

                    foreach ($table_obj->table->column as $k => $v) {
                        $column_type[$v->attrs->name] = $v->attrs->type;
                    }
                }
            }

            return $column_type;
        }

        function toString() {
            return "<?php if(!defined('__ZBXE__')) exit();\n"
            . $this->queryTag->toString()
            . 'return $query; ?>';
        }

    }

?>
