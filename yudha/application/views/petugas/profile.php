<div class="span10">
    <h2>Profile</h2>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th><center>#</center></th>
    <th><center>username</center></th>
    <th><center>nama</center></th>
    <th><center>no hp</center></th>
    <th><center>status</center></th>
    <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
                <tr>
                    <td><center><?php echo $no ?></center></td>
    <td><center><?php echo $user[0]->username ?></center></td>
    <td><center><?php echo $user[0]->nama ?></center></td>
    <td><center><?php echo $user[0]->no_hp ?></center></td>
    <td><center><?php echo $user[0]->status ?></center></td>
                    <td>
                       <center> <?php
                        echo anchor('petugas/profile_edit/' . $user[0]->id_user,'Edit');
                        ?></center>
                    </td>
                </tr>
                <?php $no ++ ?>

        </tbody>
    </table>
</div><!--/row-->
