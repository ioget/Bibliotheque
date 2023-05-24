
window.addEventListener('load',function(e){

    class TableRow {
        constructor(parentElement) {
          this.parentElement = parentElement;
        }
      
        render() {
          const row = document.createElement("tr");
          row.className =
            "bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-neutral-50 dark:hover:bg-gray-600";
      
          const cell1 = document.createElement("th");
          cell1.className =
            "px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white";
          cell1.textContent = "valeur1";
      
          const cell2 = document.createElement("td");
          cell2.className = "px-6 py-4";
          cell2.textContent = "valeur2";
      
          const cell3 = document.createElement("td");
          cell3.className = "px-6 py-4";
          cell3.textContent = "valeur3";
      
          const cell4 = document.createElement("td");
          cell4.className = "px-6 py-4";
          cell4.textContent = "valeur4";
      
          const cell5 = document.createElement("td");
          cell5.className = "px-6 py-4";
          cell5.textContent = "valeur4";
      
          const cell6 = document.createElement("td");
          cell6.className = "px-6 py-4 flex gap-x-1 justify-end text-right";
      
          const img1 = document.createElement("img");
          img1.setAttribute("href", "#");
          img1.setAttribute("data-popover-target", "popover");
          img1.className = "hover:scale-105";
          img1.setAttribute("width", "18");
          img1.setAttribute("src", "/assets/img/icons/eye-outline.svg");
      
          const span1 = document.createElement("span");
          span1.className = "w-1 h-5 bg-neutral-200 rounded-md";
      
          const img2 = document.createElement("img");
          img2.setAttribute("src", "/assets/img/edit.svg");
          img2.className = "hover:scale-105";
          img2.setAttribute("width", "18");
          img2.setAttribute("alt", "");
      
          const span2 = document.createElement("span");
          span2.className = "w-1 h-5 bg-neutral-200 rounded-md";
      
          const img3 = document.createElement("img");
          img3.setAttribute("src", "/assets/img/icons/trash-outline.svg");
          img3.setAttribute("data-modal-target", "popup-modal");
          img3.setAttribute("data-modal-toggle", "popup-modal");
          img3.className = "hover:scale-105";
          img3.setAttribute("width", "18");
          img3.setAttribute("alt", "");
      
          const div = document.createElement("div");
          div.setAttribute("data-popover", "");
          div.setAttribute("id", "popover");
          div.setAttribute("role", "tooltip");
          div.className =
            "absolute z-[60] invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800";
      
          const div1 = document.createElement("div");
          div1.className =
            "px-3 py-2 bg-gray-100 border-b border-gray-200 z-[60] rounded-t-lg dark:border-gray-600 dark:bg-gray-700";
      
          const h3 = document.createElement("h3");
          h3.className =
            "font-semibold text-gray-900 dark:text-white z-[60]";
          h3.textContent = "Titre";
      
          const div2 = document.createElement("div");
          div2.className = "px";
        }

    }

    t = new TableRow("table");
    


},false)