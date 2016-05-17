<div class="container">
        <table>
                <?php foreach ($users as $user) : ?>
                        <tr>
                                <td><?php echo $user->id; ?></td>
                                <td><?php echo $user->mail; ?></td>
                                <td><?php echo $user->password; ?></td>
                        </tr>
                <?php endforeach; ?>
        </table>
</div>
