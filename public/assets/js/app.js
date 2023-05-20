
/*
window.addEventListener('load', function (e) {
    console.log("app")
    const form = document.querySelector('.MyFormCreateBook');
    const data = new FormData(form);


    const create = document.querySelector('.js-Create-book');
    console.log(data)

    class FormValidator {
        constructor(form) {
            this.form = form;
            this.fields = ['Book-name', 'auteur','csrf_test_name', 'date', 'number', 'langue', 'categorie'];
            this.isValid = false;

        }

        initialize() {
            this.validateOnEntry();
            this.form.addEventListener('submit', e => {
                e.preventDefault();
                this.validateOnSubmit();
                console.log(this.getFormData());
                console.log(data);

                // let data = this.getFormData();
                if (this.isValid) {
                    console.log("sending");
                    axios.post('/api/create/book', this.getFormData(), {
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        }
                    })
                        .then(response => {
                            console.log(response);
                        })
                        .catch(error => {
                            console.error(error);
                        });

                }
            });
        }

        getFormData() {
            const data = {};
            this.fields.forEach(field => {
                const input = document.querySelector(`#${field}`);
                data[field] = input.value;
            });
            const input = document.querySelector(`#resume`);
            data['resume'] = input.value;
            return data;
        }

        validateOnEntry() {
            this.fields.forEach(field => {
                const input = document.querySelector(`#${field}`);
                input.addEventListener('input', event => {
                    this.validateFields(input);
                });
            });
        }

        validateOnSubmit() {
            let isValid = true;
            this.fields.forEach(field => {
                const input = document.querySelector(`#${field}`);
                if (!this.validateFields(input)) isValid = false;
            });
            this.isValid = isValid;
        }

        validateFields(field) {
            if (field.value.trim() === '') {
                this.setStatus(field, `${field.previousElementSibling.innerText} cannot be blank`, 'error');
                return false;
            } else {
                this.setStatus(field, null, 'success');
                return true;
            }
        }

        setStatus(field, message, status) {
            const errorMessage = field.parentElement.querySelector('.error-message');
            if (status === 'success') {
                if (errorMessage) errorMessage.innerText = '';
                field.classList.remove('input-error');
            }

            if (status === 'error') {
                if (errorMessage) errorMessage.innerText = message;
                field.classList.add('input-error');
            }
        }
    }


    const validator = new FormValidator(form);
    validator.initialize();




}, false)

*/

window.addEventListener('load', function (e) {
    console.log("app");
    const form = document.querySelector('.js-caisse');
    const form2 = document.querySelector('.js-book');
    //const s = document.querySelector('.search');
    const data = new FormData(form);
    console.log(form);
    console.log(data);

    class GetUser {
        constructor(form) {
            this.form = form;
            this.fields = ['categorie', 'search', 'csrf_test_name',];
            this.isValid = false;

        }

        initialize() {

            this.form.addEventListener('submit', e => {
                e.preventDefault();
                this.action()
              });

              
            let search = document.querySelector('#search')
            search.addEventListener('input',e => {
                this.action()
            },false)
        
        }

       

        action()
        {
            let d = this.getFormData();
              //  console.log(this.fields);

                // let data = this.getFormData();
                let a;
                let jsRetrun = document.querySelector(".js-retrun") 
                let jsBorrow = document.querySelector(".js-borrow")
                jsRetrun.classList.remove("flex")
                jsRetrun.classList.add("hidden")
                jsBorrow.classList.remove("flex")
                jsBorrow.classList.add("hidden")  
                this.updateValues2({
                    Name: "",
                    Langue: "",
                    Categorie: "",
                    Examplary:""
                  }); 
                console.log("sending")
              //  for(let i=0;i<2;i++){
             //   let axios = require('axios')
                axios.post('/api/get/users', d, {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                    .then(response => {
                        console.log(response);
                        let status = document.querySelector('.user-status-succes');
                        let statusE = document.querySelector('.user-status-error');
                        statusE.classList.remove('flex')  
                        statusE.classList.add('hidden')
                        status.classList.remove('hidden')  
                        status.classList.add('flex')
                        if(response.data.data.length != 0)
                        {
                            sessionStorage.setItem('id_users', response.data.data[0].id_users);
                            response.data.data[0].id_filiere = response.data.data[0].id_filiere == "16" ? 'none' : response.data.data[0].id_filiere
                            this.updateValues({
                                Point: response.data.data[0].point,
                                Filiere: response.data.data[0].id_filiere                                ,
                                Lastname: response.data.data[0].prenom,
                                Firstname: response.data.data[0].nom
                              });
                            
                        }else{
                            this.updateValues({
                                Point: "",
                                Filiere: "",
                                Lastname: "",
                                Firstname:""
                              });
                        }
                       
                    })
                    .catch(error => {
                        console.error(error);
                      //  sessionStorage.removeItem('id_users');
                        let status = document.querySelector('.user-status-error');
                        let statusS = document.querySelector('.user-status-succes');
                        statusS.classList.remove('flex')  
                        statusS.classList.add('hidden')
                        status.classList.remove('hidden')  
                        status.classList.add('flex')
                        this.updateValues({
                            Point: "",
                            Filiere: "",
                            Lastname: "",
                            Firstname:""
                          });
                          sessionStorage.setItem('id_users',null)
                    
                    });
        }


        getFormData() {
            const data = {};
            this.fields.forEach(field => {
                const input = document.querySelector(`#${field}`);
                data[field] = input.value;
            });
            
        
            axios.get('/api/get/csrf', {}, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
                .then(response => {
                    sessionStorage.setItem('hash', response.data.hash);
                    console.log(sessionStorage);
                    
                })
                .catch(error => {
                    console.error(error);
                });
                data['csrf_test_name']=  sessionStorage.getItem('hash')

            
                
          
            return data;
        }

         updateValues(values) {
            // Vérifie si l'objet values contient une valeur pour les points
            if (values.hasOwnProperty('Point')) {
              // Met à jour le contenu de l'élément avec la classe value-point
              document.querySelector('.value-point').textContent = values.Point;
            }
            
            // Vérifie si l'objet values contient une valeur pour la filière
            if (values.hasOwnProperty('Filiere')) {
              // Met à jour le contenu de l'élément avec la classe value-filiere
              document.querySelector('.value-filiere').textContent = values.Filiere;
            }
            
            // Vérifie si l'objet values contient une valeur pour le nom
            if (values.hasOwnProperty('Lastname')) {
              // Met à jour le contenu de l'élément avec la classe value-lastname
              document.querySelector('.value-lastname').textContent = values.Lastname;
            }
            
            // Vérifie si l'objet values contient une valeur pour le prénom
            if (values.hasOwnProperty('Firstname')) {
              // Met à jour le contenu de l'élément avec la classe value-firstname
              document.querySelector('.value-firstname').textContent = values.Firstname;
            }
          }
          
          // Exemple d'utilisation de la fonction updateValues

          updateValues2(values) {
            // Vérifie si l'objet values contient une valeur pour les points
            if (values.hasOwnProperty('Name')) {
              // Met à jour le contenu de l'élément avec la classe value-point
              document.querySelector('.value-name').textContent = values.Name;
            }
            
            // Vérifie si l'objet values contient une valeur pour la filière
            if (values.hasOwnProperty('Langue')) {
              // Met à jour le contenu de l'élément avec la classe value-filiere
              document.querySelector('.value-langue').textContent = values.Langue;
            }
            
            // Vérifie si l'objet values contient une valeur pour le nom
            if (values.hasOwnProperty('Categorie')) {
              // Met à jour le contenu de l'élément avec la classe value-lastname
              document.querySelector('.value-categorie').textContent = values.Categorie;
            }
            
            // Vérifie si l'objet values contient une valeur pour le prénom
            if (values.hasOwnProperty('Examplary')) {
              // Met à jour le contenu de l'élément avec la classe value-firstname
              document.querySelector('.value-examplary').textContent = values.Examplary;
            }
          }
         
          

    }



    class GetBook {
        constructor(form) {
            this.form = form;
            this.fields = [ 'search-book', 'csrf_test_name',];
            this.isValid = false;

        }

        initialize() {

            this.form.addEventListener('submit', e => {
                e.preventDefault();
                this.action()
       //     }
              });

            let search = document.querySelector('#search-book')
            search.addEventListener('input',e => {
                this.action()
            },false)


            
            let returned = document.querySelector(".js-confirm-return")
            let borrow = document.querySelector(".js-confirm-borrow")
            let jsReset = document.querySelector(".js-Reset-return")
            
            borrow.addEventListener('click',e => { 
               
                let tab = {}

                tab = this.getFormData()
                tab['id_users'] = sessionStorage.getItem('id_users')
                tab['id_livre'] = sessionStorage.getItem('id_livre')
                console.log(tab);
                axios.get('/api/user/borrow', tab, { 
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                    .then(response => {
                        console.log(sessionStorage);
                        
                    })
                    .catch(error => {
                        console.error(error);
                    });
             },false)

            returned.addEventListener('click',e => { 
                
                let tab = {}

                tab['csrf_test_name'] = this.getCsrf()
                tab['id_users'] = sessionStorage.getItem('is_users')
                tab['id_livre'] = sessionStorage.getItem('is_livre')
                axios.get('/api/user/return', tab, {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                    .then(response => {
                        console.log(sessionStorage);
                        
                    })
                    .catch(error => {
                        console.error(error);
                    });
             
             },false)
        }

        action()
        {
           console.log(sessionStorage.getItem('id_users') )
            if(sessionStorage.getItem('id_users') != "null"){
            let d = {};
            let jsRetrun = document.querySelector(".js-retrun") 
            let jsBorrow = document.querySelector(".js-borrow")
            
            d = this.getFormData()
            d['id_users'] =  sessionStorage.getItem('id_users')
              console.log(d);

              // let data = this.getFormData();
              let a;
              console.log("sending")
            //  for(let i=0;i<2;i++){
           //   let axios = require('axios')
              axios.post('/api/get/book', d, {
                  headers: {
                      'Content-Type': 'application/x-www-form-urlencoded'
                  }
              })
                  .then(response => {
                      console.log(response);
                      let status = document.querySelector('.book-status-succes');
                      let statusE = document.querySelector('.book-status-error');
                      statusE.classList.remove('flex')  
                      statusE.classList.add('hidden')
                      status.classList.remove('hidden')  
                      status.classList.add('flex')
                      if(response.data.data.length != 0)
                      {
                          sessionStorage.setItem('id_livre', response.data.data[0].id_livre);
                       //  response.data.data[0].id_filiere = response.data.data[0].id_filiere == "16" ? 'none' : response.data.data[0].id_filiere
                          this.updateValues({
                              Name: response.data.data[0].nom,
                              Langue: response.data.data[0].langue,
                              Categorie: response.data.data[0].id_categorie,
                              Examplary: response.data.data[0].nb_exemplaire
                            });
                          

                            if(response.data.data[0].status == 0)
                            { 
                                jsRetrun.classList.remove("hidden")
                                jsRetrun.classList.add("flex")
                                jsBorrow.classList.remove("flex")
                                jsBorrow.classList.add("hidden")
                            }else{
                                jsBorrow.classList.remove("hidden")
                                jsBorrow.classList.add("flex")
                                jsRetrun.classList.remove("flex")
                                jsRetrun.classList.add("hidden")
                            }

                            console.log("Je suis KO")
                            this.changeValues(sessionStorage.getItem('id_users'),sessionStorage.getItem('id_livre'))

                            this.changeValues2(sessionStorage.getItem('id_users'),sessionStorage.getItem('id_livre'))
                      }else{
                        this.updateValues({
                            Name: "",
                            Langue: "",
                            Categorie: "",
                            Examplary:""
                          }); 
                        jsRetrun.classList.remove("flex")
                        jsRetrun.classList.add("hidden")
                        jsBorrow.classList.remove("flex")
                        jsBorrow.classList.add("hidden")          
                      }
                     
                  })
                  .catch(error => {
                      console.error(error);
                      let status = document.querySelector('.book-status-error');
                      let statusS = document.querySelector('.book-status-succes');
                      statusS.classList.remove('flex')  
                      statusS.classList.add('hidden')
                      status.classList.remove('hidden')  
                      status.classList.add('flex')
                      jsRetrun.classList.remove("flex")
                      jsRetrun.classList.add("hidden")
                      jsBorrow.classList.remove("flex")
                      jsBorrow.classList.add("hidden")   
                      this.updateValues({
                        Name: "",
                        Langue: "",
                        Categorie: "",
                        Examplary:""
                      });
                  
                  });
            }else{
                alert("User is not selected. Search user before to continue");
            }
           
        
            
        }

         changeValues(id_users_value, id_livre_value) {
            document.getElementById('id').value = parseInt(id_users_value);
            document.getElementById('id_livre').value =parseInt(id_livre_value);
            console.log("user " +  document.getElementById('id').value)
            console.log("livre " +  document.getElementById('id_livre').value)
        }

        changeValues2(id_users_value, id_livre_value) {
            document.getElementById('id-js').value = parseInt(id_users_value);
            document.getElementById('id_livre-js').value =parseInt(id_livre_value);
            console.log("user-js" +  document.getElementById('id-js').value)
            console.log("livre-js" +  document.getElementById('id_livre-js').value)
        }
        


        getFormData() {
            const data = {};
            this.fields.forEach(field => {
                const input = document.querySelector(`#${field}`);
                data[field] = input.value;
            });
            

            axios.get('/api/get/csrf', {}, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
                .then(response => {
                    sessionStorage.setItem('hash', response.data.hash);
                    console.log(sessionStorage);
                    
                })
                .catch(error => {
                    console.error(error);
                });
                data['csrf_test_name']=  sessionStorage.getItem('hash')

            
                
          
            return data;
        }


        getCsrf()
        {
            axios.get('/api/get/csrf', {}, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
                .then(response => {
                    sessionStorage.setItem('hash', response.data.hash);
                    console.log(sessionStorage);
                    
                })
                .catch(error => {
                    console.error(error);
                });
                return sessionStorage.getItem('hash')
        }

         updateValues(values) {
            // Vérifie si l'objet values contient une valeur pour les points
            if (values.hasOwnProperty('Name')) {
              // Met à jour le contenu de l'élément avec la classe value-point
              document.querySelector('.value-name').textContent = values.Name;
            }
            
            // Vérifie si l'objet values contient une valeur pour la filière
            if (values.hasOwnProperty('Langue')) {
              // Met à jour le contenu de l'élément avec la classe value-filiere
              document.querySelector('.value-langue').textContent = values.Langue;
            }
            
            // Vérifie si l'objet values contient une valeur pour le nom
            if (values.hasOwnProperty('Categorie')) {
              // Met à jour le contenu de l'élément avec la classe value-lastname
              document.querySelector('.value-categorie').textContent = values.Categorie;
            }
            
            // Vérifie si l'objet values contient une valeur pour le prénom
            if (values.hasOwnProperty('Examplary')) {
              // Met à jour le contenu de l'élément avec la classe value-firstname
              document.querySelector('.value-examplary').textContent = values.Examplary;
            }
          }
          
          // Exemple d'utilisation de la fonction updateValues
         
          

    }

    let getUser = new GetUser(form);
    getUser.initialize();
    this.sessionStorage.setItem('id_livre',null)
    this.sessionStorage.setItem('id_users',null)
    let getBook= new GetBook(form2);
    getBook.initialize();
}, false);