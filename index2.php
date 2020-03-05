$sql ="SELECT * FROM $table";
    $query    =mysql_query($sql);
    $data    =array();
    while(($row    =mysql_fetch_array($query)) != null){
        $data[] =$row;
    }
    $count    =count($data);
    echo "Jumlah data dari array PHP: $count";
