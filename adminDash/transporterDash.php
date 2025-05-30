<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Transporter Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <div class="navbar bg-green-700 text-white px-6 ">
    <div class="flex-1 text-xl font-bold">🚛 Transporter Dashboard</div>
    <div class="flex-none">
        <button class="btn w-40 bg-white text-gray-600 font-bold"> Logout</button>
    </div>
  </div>

  <!-- Main Section -->
  <div class="container mx-auto mt-8 p-4">
    
    
    <!-- Welcome -->
    <div class="text-center mb-6">
      
      <p class="text-gray-600">Manage and track your delivery requests easily.</p>
    </div>
    

    <!-- Add Transport Form -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
      <h3 class="text-lg font-bold mb-4">Add New Transport</h3>
      <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" placeholder="Vehicle Number" class="input input-bordered w-full" required />
        <input type="text" placeholder="Driver Name" class="input input-bordered w-full" required />
        <input type="text" placeholder="From Location" class="input input-bordered w-full" required />
        <input type="text" placeholder="To Location" class="input input-bordered w-full" required />
        <input type="date" class="input input-bordered w-full" required />
        <button type="submit" class="btn bg-green-500 hover:bg-green-600 text-white col-span-full">Add Transport</button>
      </form>
    </div>

    <!-- Delivery Assignments Table -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
      <h3 class="text-lg font-bold mb-4">📦 Assigned Deliveries</h3>
      <div class="overflow-x-auto">
        <table class="table table-zebra w-full">
          <thead>
            <tr>
              <th>Farmer Name</th>
              <th>Product</th>
              <th>Quantity</th>
              <th>Pickup Location</th>
              <th>Delivery Location</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Hasan Ali</td>
              <td>Rice</td>
              <td>500 kg</td>
              <td>Bogura</td>
              <td>Dhaka</td>
              <td><span class="badge badge-warning">Pending</span></td>
            </tr>
            <tr>
              <td>Rokeya Begum</td>
              <td>Potatoes</td>
              <td>800 kg</td>
              <td>Jessore</td>
              <td>Chittagong</td>
              <td><span class="badge badge-success">In Transit</span></td>
            </tr>
            <tr>
              <td>Abdul Karim</td>
              <td>Wheat</td>
              <td>600 kg</td>
              <td>Rajshahi</td>
              <td>Khulna</td>
              <td><span class="badge badge-error">Delayed</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Transport Status Table -->
    <div class="bg-white rounded-xl shadow-lg p-6">
      <h3 class="text-lg font-bold mb-4">My Transports</h3>
      <div class="overflow-x-auto">
        <table class="table table-zebra">
          <thead>
            <tr></tr>
</thead>
</table>
</div>
</div>
</div>
 <script src="dashboard.js"></script>
</body>
</html>
