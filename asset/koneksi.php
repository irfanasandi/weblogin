<?php    
    echo "SQL Server Connection Test: ";
    $serverName = "10.1.1.90\SQL2008";
    $connectionOptions = array('Database'=>'Ax_2009_Live', 'UID'=>'YESSS', 'PWD'=>'ReportYe$$$90');
    $conn = sqlsrv_connect( $serverName, $connectionOptions);
    if( $conn === false )
    {
        echo "Could not connect.\n";
        die( print_r( sqlsrv_errors(), true));
    }
    else {
        echo "koneksi berhasil..!<br/>";

        $tsql = "select periodeid,description,fromdate,todate from erl_periode order by periodeid";
        $result = sqlsrv_query($conn, $tsql);
        while($row = sqlsrv_fetch_array($result))
        {
          echo $row['periodeid']. ': '. $row['description'] . '<br/> ';
        }
        sqlsrv_close($conn);
    }
  
?>