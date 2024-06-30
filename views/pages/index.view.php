<h1>Most Popular Names:</h1>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Count</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($overview AS $entry): ?>
    <tr>
      <td>
        <a href="name.php?<?php echo http_build_query(['name' => e($entry['name'])]) ?>">
          <?php echo e($entry['name']) ?>
        </a>
      </td>
      <td>
        <?php echo e($entry['sum']) ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>