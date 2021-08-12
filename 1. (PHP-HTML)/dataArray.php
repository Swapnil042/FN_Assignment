
<?php
    class dataArray extends ArrayObject {

    public function __set($key, $val) {
        $this[$key] = $val;
    }

    public function displayAsTable() {
        $table =  '<table>';
        $table .= '<tbody>';    
        $all_data = (array) $this;
            $table .= '<tr>';
            foreach ($all_data as  $key => $value) {
                
                $table .= '<th>' . $key . '</th>';
            }  
            $table .= '</tr>';

            $table .= '<tr>';
            foreach ($all_data as $key => $value) {

                $table .= '<td>' . $value . '</td>';
            }  
            $table .= '</tr>';

        $table .= '</tbody>';
        $table .=  '</table>'; 
           
        return $table;
    } 
}

?>