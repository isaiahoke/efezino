<template>
  <div class="text-white mb-8">
    <div class="places-input text-gray-800">
      <input
        type="search"
        id="address"
        class="form-control"
        placeholder="Choose a city..."
      />

      <p>Selected: <strong id="address-value">none</strong></p>
    </div>

    <div
      class="
        weather-container
        font-sans
        md:w-128
        max-w-lg
        rounded-lg
        overflow-hidden
        bg-gray-900
        shadow-lg
        mt-8
      "
    >
      <div class="current-weather flex items-center justify-between px-6 py-8">
        <div class="flex flex-col md:flex-row items-center justify-between px-6 py-8">

            <div class ="flex items-center">
          <div> feels like 2*c</div>
            
            </div>

        </div>
      </div>
      <!-- end current weather -->
    </div>
    <!-- end weather container-->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
