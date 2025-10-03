document.addEventListener("DOMContentLoaded", function () {
  function updateDateTime() {
    const now = new Date();
    const optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = now.toLocaleDateString("en-IN", optionsDate);

    const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
    const formattedTime = now.toLocaleTimeString("en-IN", optionsTime);

    document.getElementById("todayDateTime").innerText =
      `${formattedDate} at ${formattedTime}`;
  }

  updateDateTime();
  setInterval(updateDateTime, 1000);
});
