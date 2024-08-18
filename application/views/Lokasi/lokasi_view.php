<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Locations</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
	<div class="max-w-full mx-auto bg-white p-6 shadow-lg rounded-lg">
		<h1 class="text-3xl font-bold mb-6">Locations</h1>
		<a href="<?php echo site_url('lokasi/create'); ?>" class="bg-green-500 text-white py-2 px-6 rounded mb-6 inline-block">Create New Location</a>
		<div class="overflow-x-auto">
			<table class="w-full bg-white border border-gray-300">
				<thead>
					<tr>
						<th class="py-3 px-4 border-b text-left">Name</th>
						<th class="py-3 px-4 border-b text-left">Country</th>
						<th class="py-3 px-4 border-b text-left">Province</th>
						<th class="py-3 px-4 border-b text-left">City</th>
						<th class="py-3 px-4 border-b text-left">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($lokasi as $lokasi): ?>
						<tr>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($lokasi['namaLokasi']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($lokasi['negara']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($lokasi['provinsi']); ?></td>
							<td class="py-3 px-4 border-b"><?php echo htmlspecialchars($lokasi['kota']); ?></td>
							<td class="py-3 px-4 border-b">
								<a href="<?php echo site_url('lokasi/edit/' . $lokasi['id']); ?>" class="bg-yellow-500 text-white py-1 px-4 rounded">Edit</a>
								<a href="<?php echo site_url('lokasi/delete/' . $lokasi['id']); ?>" class="bg-red-500 text-white py-1 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>