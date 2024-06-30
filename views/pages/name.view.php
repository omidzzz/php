<h1>Statistics for the name: <?php echo e($name) ?></h1>
<?php if (empty($entries)): ?>
  <p>This name (<strong style="color: lightblue;"><?php echo e($name) ?></strong>) doesn't exist in our database!</p>
<?php else: ?>
  
  <table>
    <thead>
        <tr>
          <th><?php echo "Year" ?></th>
          <th><?php echo "Number of babies born" ?></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($entries AS $data): ?>
        <tr>
          <td><?php echo e($data['year']);?></td>
          <td><?php echo e($data['count']);?></td>
        </tr>
      <?php endforeach; ?>
  </tbody>
  </table>
<?php endif; ?>