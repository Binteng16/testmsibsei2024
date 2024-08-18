<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Project</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
	<div class="max-w-2xl mx-auto bg-white p-5 shadow-lg rounded-lg">
		<h1 class="text-2xl font-bold mb-5">Edit Location</h1>
		<form action="<?php echo site_url('lokasi/update/' . $Lokasi['id']); ?>" method="POST">
			<div class="mb-4">
				<label class="block text-gray-700">Name</label>
				<input type="text" name="name" value="<?php echo htmlspecialchars($Lokasi['namaLokasi']); ?>" class="w-full p-2 border border-gray-300 rounded" required>
			</div>
			<div class="mb-4">
				<label class="block text-gray-700">Country</label>
				<input type="text" name="country" value="<?php echo htmlspecialchars($Lokasi['negara']); ?>" class="w-full p-2 border border-gray-300 rounded" required>
			</div>
			<div class="mb-4">
				<label class="block text-gray-700">Province</label>
				<input type="text" name="province" value="<?php echo htmlspecialchars($Lokasi['provinsi']); ?>" class="w-full p-2 border border-gray-300 rounded" required>
			</div>
			<div class="mb-4">
				<label class="block text-gray-700">City</label>
				<input type="text" name="city" value="<?php echo htmlspecialchars($Lokasi['kota']); ?>" class="w-full p-2 border border-gray-300 rounded" required>
			</div>
			<button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update Project</button>
		</form>
	</div>
</body>

</html>
