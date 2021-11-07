const formFilter = document.querySelector("#formFilter");
const sortSelect = document.querySelector("#sortSelect");

window.onload = () => {
  const params = new URLSearchParams(document.location.search.substring(1));
  const sortBy = params.get("sortBy");
  const options = sortSelect.querySelectorAll("option");
  for (let i = 0; i < options.length; i++) {
    if (options[i].value === sortBy) {
      options[i].setAttribute("selected", true);
    }
  }
};

sortSelect.addEventListener("change", (e) => {
  formFilter.submit();
});
