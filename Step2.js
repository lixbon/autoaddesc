import siteOrder from "./data.js";

// Lưu đối tượng siteOrder vào LocalStorage
const siteOrderJSON = JSON.stringify(siteOrder);
localStorage.setItem("siteOrder", siteOrderJSON);
