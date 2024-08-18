<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-screen p-6">
	<div class="flex flex-col space-y-8">
		<!-- Lokasi Content -->
		<div class="bg-white p-6 shadow-lg rounded-lg">
			<h2 class="text-2xl font-bold mb-4">Lokasi</h2>
			<?php $this->load->view('Lokasi/lokasi_view'); ?>
		</div>

		<!-- Proyek Content -->
		<div class="bg-white p-6 shadow-lg rounded-lg">
			<h2 class="text-2xl font-bold mb-4">Proyek</h2>
			<?php $this->load->view('Proyek/proyek_view'); ?>
		</div>
	</div>
</body>

</html>
