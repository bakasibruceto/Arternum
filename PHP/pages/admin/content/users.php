<div id="content">
    <div class="container">
        <div id="col" class="item item-1">
            <div id="logopad">
                <div id="hugelogo">
                    <img src="CSS/images/sample.png">
                </div>
            </div>
        </div>
        <div id="contents" class="item item-2">
            <table>
                <tr>
                    <td colspan="3">
                        <h1>Users</h1>
                    </td>
                </tr>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Username
                    </th>
                    <th>
                        E-mail
                    </th>
                </tr>
                <?php
                $sql = "SELECT * FROM login ORDER BY id";
                $res = mysqli_query($data, $sql);
                while ($rows = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>


        </div>
    </div>
    <br>
</div>