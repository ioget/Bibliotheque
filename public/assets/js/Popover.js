



    export   class Popover {
        constructor(popover,title,text) {
          this.text = text;
          this.popover = popover;
          this.title = title;
        }
      
        createPopover() {
          const popover = document.createElement('div');
          popover.setAttribute('data-popover', '');
          popover.setAttribute('id',  this.popover);
          popover.setAttribute('role', 'tooltip');
          popover.classList.add('absolute', 'z-[60]', 'invisible', 'inline-block', 'w-64', 'text-sm', 'text-gray-500', 'transition-opacity', 'duration-300', 'bg-white', 'border', 'border-gray-200', 'rounded-lg', 'shadow-sm', 'opacity-0', 'dark:text-gray-400', 'dark:border-gray-600', 'dark:bg-gray-800');
      
          const popoverHeader = document.createElement('div');
          popoverHeader.classList.add('px-3', 'py-2', 'bg-gray-100', 'border-b', 'border-gray-200', 'z-[60]', 'rounded-t-lg', 'dark:border-gray-600', 'dark:bg-gray-700');
      
          const popoverTitle = document.createElement('h3');
          popoverTitle.classList.add('font-semibold', 'text-gray-900', 'dark:text-white', 'z-[60]');
          popoverTitle.textContent = this.title;
      
          const popoverBody = document.createElement('div');
          popoverBody.classList.add('px-3', 'py-2', 'z-50');
      
          const popoverText = document.createElement('p');
          popoverText.classList.add('text-sm', 'z-[60]');
          popoverText.textContent = this.text;
      
          const popoverArrow = document.createElement('div');
          popoverArrow.setAttribute('data-popper-arrow', '');
      
          popoverHeader.appendChild(popoverTitle);
          popoverBody.appendChild(popoverText);
      
          popover.appendChild(popoverHeader);
          popover.appendChild(popoverBody);
          popover.appendChild(popoverArrow);
      
          return popover;
        }
      
        attachPopoverTo(element) {
          
          const popover = this.createPopover();
          element.appendChild(popover);
        }

        SelectAttachPopoverTo(selecteur) {
            const element = document.querySelector("."+selecteur)
            const popover = this.createPopover();
            element.appendChild(popover);
          }
      }
      
   
