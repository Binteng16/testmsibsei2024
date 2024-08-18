<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projects</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
	<div class="max-w-full mx-auto bg-white p-6 shadow-lg rounded-lg">
		<h1 class="text-3xl font-bold mb-6">Projects</h1>

		<a href="<?php echo site_url('Proyek/create'); ?>" class="bg-green-500 text-white py-2 px-6 rounded mb-6 inline-block">Create New Project</a>

		<div class="overflow-x-auto">
			<table class="w-full bg-white border border-gray-300">
				<thead>
					<tr>
						<th class="py-3 px-4 border-b text-left">Name</th>
						<th class="py-3 px-4 border-b text-left">Client</th>
						<th class="py-3 px-4 border-b text-left">Start Date</th>
						<th class="py-3 px-4 border-b text-left">End Date</th>
						<th class="py-3 px-4 border-b text-left">Project Lead</th>
						<th class="py-3 px-4 border-b text-left">Description</th>
						<th class="py-3 px-4 border-b text-left">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($proyek as $proyek): ?>
						<tr>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($proyek['namaProyek']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($proyek['client']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($proyek['tglMulai']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($proyek['tglSelesai']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($proyek['pimpinanProyek']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($proyek['keterangan']); ?></td>
							<td class="py-3 px-4 border-b">
								<a href="<?php echo site_url('Proyek/edit/' . $proyek['id']); ?>" class="bg-yellow-500 text-white py-1 px-4 rounded">Edit</a>
								<a href="<?php echo site_url('Proyek/delete/' . $proyek['id']); ?>" class="bg-red-500 text-white py-1 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>
