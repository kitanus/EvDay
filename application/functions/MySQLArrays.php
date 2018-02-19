<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 01.02.2018
 * Time: 11:40
 */

    /**
     * Раздатчик массивов инструкций для аргумента select
     * @param string        $name      название нужного массива инструкции
     * @return array
     */
    function chooseSelect($name)
    {
        switch ($name) {
            case "events":
                $select['events']['id'] = "id";
                $select['events']['name'] = "name";
                $select['events']['content'] = "content";
                $select['events']['price'] = "price";
                $select['events']['time'] = "time";
                $select['events']['link'] = "link";
                return $select;
                break;

            default:
                echo "Массив не сработал";

        }
    }

    /**
     * Раздатчик массивов инструкций для аргумента join
     * @param string        $name      название нужного массива инструкции
     * @return array
     */
    function chooseJoin($name)
    {
        switch ($name) {
            case "pAUser":
                $join["`stud_group`"]["`sg`"] = "`u`.`group_id` = `sg`.`id`";
                $join["`institute`"]["`i`"] = "`sg`.`institute_id` = `i`.`id`";
                $join["`user_type`"]["`ut`"] = "`u`.`user_type_id` = `ut`.`id`";
                return $join;
                break;

            default:
                echo "Массив не сработал";

        }
    }

    /**
     * Раздатчик массивов инструкций для аргумента insert
     * @param string        $name      название нужного массива инструкции
     * @param array        $get      массив GET
     * @param array        $post      массив POST
     * @param array        $var      массив необходимых переменных
     * @return array
     */
    function chooseInsert($name, $get = null, $post = null, $var = null)
    {
        switch ($name) {
            case "createEvent":
                $values[0]["`id`"] = NULL;
                $values[0]["`name`"] = "'{$post['nameEvent']}'";
                $values[0]["`content`"] = "'{$post['contentEvent']}'";
                $values[0]["`price`"] = "'{$post['priceEvent']}'";
                $values[0]["`time`"] = "'{$post['timeEvent']}'";
                $values[0]["`link`"] = "'{$post['linkEvent']}'";
                return $values;
                break;

            default:
                echo "Массив не сработал";

        }
    }

    /**
     * Раздатчик массивов инструкций для аргумента update
     * @param string        $name      название нужного массива инструкции
     * @param array        $post      массив POST
     * @param array        $var      массив необходимых для инструкции переменных
     * @return array
     */
    function chooseUpdate($name, $post = null, $var = null)
    {
        switch ($name) {
            case "pTTable":
                $values["tr"] = "{$var[2]}";
                $values["table_order"] = "{$post['order'][$var[0]]}";
                $values["day_id"] = "{$post["day"][$var[0]]}";
                $values["time_lesson"] = "{$post['time'][$var[0]]}";
                $values["week_id"] = "{$post['week'][$var[0]]}";
                $values["lesson_id"] = "{$post['lesson'][$var[0]]}";
                $values["type_id"] = "{$post['type'][$var[0]]}";
                $values["room_lesson"] = "{$post['room'][$var[0]]}";
                $values["building_id"] = "{$post['build'][$var[0]]}";
                $values["teacher_id"] = "{$post['teachSurname'][$var[0]]}";
                $values["stud_group_id"] = "{$var[1]}";
                return $values;
                break;

            default:
                echo "Массив не сработал";
        };
    }