<script>
function loadReadPage() {
  fetch("Read.html")
    .then(res => res.text())
    .then(data => {
      document.getElementById("read-content").innerHTML = data;
    })
    .catch(err => console.error("Error loading page:", err))
}
</script>


