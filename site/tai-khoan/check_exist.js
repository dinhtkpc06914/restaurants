document.addEventListener("DOMContentLoaded", function () {
    const maKhInput = document.getElementById("ma_kh");
    const emailInput = document.getElementById("email");
  
    maKhInput.addEventListener("input", function () {
      checkExist("ma_kh", this.value);
    });
  
    emailInput.addEventListener("input", function () {
      checkExist("email", this.value);
    });
  
    function checkExist(field, value) {
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          const response = JSON.parse(xhr.responseText);
          const messageElement = document.getElementById(field + "-message");

          if (response.exists) {
            messageElement.innerHTML = response.message;
          } else {
            messageElement.innerHTML = "";
          }
        }
      };
  
      xhr.open("GET", `check_exist.php?field=${field}&value=${value}`, true);
      xhr.send();
    }
  });