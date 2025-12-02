<?php
$m = new mysqli('127.0.0.1', 'root', '', 'codeigniter');
if ($m->connect_error) {
    echo "CONNECT_ERROR: " . $m->connect_error . "\n";
    exit(1);
}
$res = $m->query("SHOW TABLES LIKE 'pat_my_address'");
echo 'TABLE_EXISTS_ROWS:' . ($res ? $res->num_rows : 0) . "\n";
if ($res && $res->num_rows) {
    $r = $m->query('SELECT * FROM pat_my_address LIMIT 5');
    if ($r) {
        while ($row = $r->fetch_assoc()) {
            echo json_encode($row) . "\n";
        }
    } else {
        echo 'SELECT_ERROR: ' . $m->error . "\n";
    }
} else {
    echo "NO_TABLE\n";
}
$m->close();
