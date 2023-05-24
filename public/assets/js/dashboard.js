

 window.addEventListener('load', function(e){
     let dropMenu = this.document.querySelector('.dropMenu')
     let Menu = this.document.querySelector('.Menu')
     let dashboard = this.document.querySelector('.dashboard')
     
     dropMenu.addEventListener('click',function(e){
        Menu.classList.toggle("dropMenu")
        dashboard.classList.toggle("dash")
        dashboard.classList.toggle("dashReset")
     }, false)

 }, false)