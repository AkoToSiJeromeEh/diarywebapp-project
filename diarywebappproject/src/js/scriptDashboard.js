const dashboardFunction = document.getElementById("add-bg-cont");
const dashboardContent = document.getElementById("hidden-content");
const btndashboardToggler = document.getElementById("show-toggle");
let isShow = true;

const toggleDashboard = () => {
  const animationClass = isShow
    ? "animate__fadeInDownBig"
    : "animate__fadeInUp";

  switch (isShow) {
    case true:
      dashboardContent.style.display = "block";
      dashboardFunction.style.backgroundColor = "white";
      break;
    case false:
      dashboardContent.style.display = "";
      dashboardFunction.style.backgroundColor = "transparent";
      break;
  }

  dashboardFunction.classList.remove(
    "animate__animated",
    "animate__fadeInDownBig",
    "animate__fadeInUp"
  );
  dashboardFunction.classList.add("animate__animated", animationClass);

  isShow = !isShow;
};

btndashboardToggler.addEventListener("click", toggleDashboard);
