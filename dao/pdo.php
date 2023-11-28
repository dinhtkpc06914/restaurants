<?php
function pdo_get_connection()
{
    $dburl = "mysql:host=localhost;dbname=duan1;charset=utf8";
    $username = 'root';
    $password = '';
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

function pdo_execute($sql)
{
    $sql_args = array_values(array_slice(func_get_args(), 1));

    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);

        // Bind parameters if needed
        // for ($i = 0; $i < count($sql_args); $i++) {
        //     $stmt->bindParam($i + 1, $sql_args[$i]);
        // }

        $stmt->execute($sql_args);

        $is_select_query = strtoupper(substr(trim($sql), 0, 6)) === 'SELECT';

        if ($is_select_query) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $stmt->rowCount();
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

