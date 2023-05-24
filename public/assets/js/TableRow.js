import { Popover } from './Popover.js';

window.addEventListener('load', function(e){

    

class TableRow {
    constructor(valeur1, valeur2, valeur3, valeur4, valeur5,popover_target,popover_title,popover_text,) {
      this.row = document.createElement('tr');
      this.row.classList.add('bg-white', 'border-b', 'dark:bg-gray-800', 'dark:border-gray-700', 'hover:bg-neutral-50', 'dark:hover:bg-gray-600');
     this.popover_target = popover_target
     this.popover_text = popover_text
     this.popover_title = popover_title

      const th = document.createElement('th');
      th.classList.add('px-6', 'py-4', 'font-medium', 'text-gray-900', 'whitespace-nowrap', 'dark:text-white');
      th.setAttribute('scope', 'row');
      th.textContent = valeur1;
      this.row.appendChild(th);
  
      const td1 = document.createElement('td');
      td1.classList.add('px-6', 'py-4');
      td1.textContent = valeur2;
      this.row.appendChild(td1);
  
      const td2 = document.createElement('td');
      td2.classList.add('px-6', 'py-4');
      td2.textContent = valeur3;
      this.row.appendChild(td2);
  
      const td3 = document.createElement('td');
      td3.classList.add('px-6', 'py-4');
      td3.textContent = valeur4;
      this.row.appendChild(td3);

      
      const td4 = document.createElement('td');
      td4.classList.add('px-6', 'py-4');
      td4.textContent = valeur5;
      this.row.appendChild(td4);
  
      const td5 = document.createElement('td');
      td5.classList.add('px-6', 'py-4', 'flex', 'gap-x-1', 'justify-end', 'text-right');
      this.row.appendChild(td5);
  
      const img1 = document.createElement('img');
      img1.setAttribute('href', '#');
      img1.setAttribute('data-popover-target', this.popover_target);
      img1.classList.add('hover:scale-105');
      img1.setAttribute('width', '18');
      img1.setAttribute('src', '/assets/img/icons/eye-outline.svg');
      td5.appendChild(img1);
  
      const span1 = document.createElement('span');
      span1.classList.add('w-1', 'h-5', 'bg-neutral-200', 'rounded-md');
      td5.appendChild(span1);
  
      const img2 = document.createElement('img');
      img2.setAttribute('src', '/assets/img/edit.svg');
      img2.classList.add('hover:scale-105');
      img2.setAttribute('width', '18');
      img2.setAttribute('alt', '');
      img2.setAttribute('srcset', '');
      td5.appendChild(img2);

      
    
  
      const span2 = document.createElement('span');
      span2.classList.add('w-1', 'h-5', 'bg-neutral-200', 'rounded-md');
      td5.appendChild(span2);

      const img3 = document.createElement('img');
      img3.setAttribute('src', '/assets/img/icons/trash-outline.svg');
      img3.classList.add('hover:scale-105');
      img3.setAttribute('width', '18');
      img3.setAttribute('alt', '');
      img3.setAttribute('srcset', '');
      td5.appendChild(img3);


      const popover = new Popover(this.popover_target,this.popover_title,this.popover_text);

      console.log(popover)
      popover.attachPopoverTo(this.row);


    }
  
    getElement() {
      return this.row;
    }
  }


  // Exemple d'utilisation :
  const table = document.querySelector('.table2');
  const row = new TableRow('valeur1', 'valeur2', 'valeur3', 'valeur4','v5',"hello", "Info","Bonjour");
 // table.appendChild(row.getElement());
  //console.log(row.getElement());

 // const popover = new Popover('text','popover');
  // popover.attachPopoverTo(document.body);

//   console.log(popover)
},false);