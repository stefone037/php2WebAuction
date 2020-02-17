



if(document.querySelector('#addCategoryBtn')) {
  const addCategoryBtn = document.querySelector('#addCategoryBtn');
  const categoryName = document.querySelector('#categoryName');
  const categoryTableBody = document.querySelector('#categoryTableBody');
  addCategoryBtn.addEventListener('click', function(e) {
    e.preventDefault();
    const formData = new FormData();
    formData.append('categoryName',  categoryName.value);
    fetch(PATH+'api/category/add', {
      credentials: "include",
      method: "POST",
      body : formData
    })
    .then(data => data.json())
    .then(response => {
      
      if(response.data.code == 200) {
        
        displayCategory(response.data.categories);
        displayMessage('You successfully added category!', 'success', 'addCategoryForm');
      }
      if(response.data.code == 409) {
        displayMessage(response.data.message, 'danger', 'addCategoryForm');
      }
    }
      );
  })
}

 function deleteCategory(e) {
  const id = e.dataset.id;
  const formData = new FormData();
  formData.append('categoryId', id);
  fetch(PATH+'api/category/delete', {
    credentials: "include",
    method: "POST",
    body : formData
  })
  .then(data => data.json())
  .then(response => {
    if(response.data.code == 200) {
      displayCategory(response.data.categories);
      displayMessage('You successfully delete category', 'success', 'categoryData');
    }
    if(response.data.code == 409) {
      displayMessage(response.data.message, 'danger', 'categoryData');
    }
  }) 
 }
function formPrepareForUpdate(e) {
  const categoryAddBtn = document.querySelector('#addCategoryBtn');
  const id = e.dataset.id;
  const formCategoryHeader = document.querySelector('#formCategoryHeader');
  const categoryName = document.querySelector('#categoryName');
  const categoryForm = document.querySelector('#categoryForm');
  const formData = new FormData();
  formData.append('categoryId', id);
  fetch(PATH+'api/category/', {
    method: "POST",
    credentials : "include",
    body : formData
  })
  .then(data => data.json())
  .then(response => {
    if(response.data.code == 200) {
     
      formCategoryHeader.innerHTML = 'Update Category';
      categoryName.setAttribute('value', response.data.category.name); 
      categoryAddBtn.innerHTML = 'Update category';
      categoryAddBtn.id = 'changeDataCategoryBtn';
      categoryForm.innerHTML += `
      <input type='hidden' id='categoryIdUpdate' value='${response.data.category.id}' />
      `;
    }
  });
}
function updateCategory() {
  const categoryIdUpdate = document.querySelector('#categoryIdUpdate');
  const categoryName = document.querySelector('#categoryName');

  const formData = new FormData();
  formData.append('categoryId', categoryIdUpdate.value);
  formData.append('categoryName', categoryName.value);
  fetch(PATH+'api/category/update', {
    method: "POST",
    credentials: "include",
      body:formData
  })
  .then(data => data.json())
  .then(response => {
    if(response.data.code == 200) {
      displayCategory(response.data.categories);
      displayMessage('Successfully update category', 'success', 'categoryData');
     displayAddCategory();
    }
    if(response.data.code == 419) { 
    }
  }); 
}
function displayMessage(message, type, where) {
  const alertMessage = document.createElement('div');
  alertMessage.innerHTML = message;
  alertMessage.classList.add('alert', 'alert-'+type);
  document.querySelector('#'+where).append(alertMessage);
  setTimeout(()=>{alertMessage.remove()},3500);
 }
 function displayCategory(categories) {
  const categoryTableBody = document.querySelector('#categoryTableBody');
 categoryTableBody.innerHTML = '';
 categoryName.value = '';
 let output = '';
 categories.forEach((category,i) => {
 output += `
 <tr>
 <th scope="row">${i+1}</th>
 <td>${category.name}</td>
 <td>
   <a class="btn btn-primary" data-id="${category.id}" id="categoryBtnUpdate" href="#">Update</a>
   <a class="btn btn-danger" data-id="${category.id}" id="categoryBtnDelete" href="#">Delete</a>
 </td>
 </tr>
 `;
 });
 categoryTableBody.innerHTML = output; 
}





function displayAddCategory() {

  const addCategoryForm = document.querySelector('#addCategoryForm');



  addCategoryForm.innerHTML = `
  <div id="formCategoryHeader" class="card-header">
            Add category
          </div>

          <div class="card-body">
            <form id="categoryForm" >
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value='' id="categoryName" placeholder="Enter category name">
              
              </div>
              <div class="card-footer">
                <a href="#" id="addCategoryBtn" class="btn btn-primary">Add category</a>
              </div>
            
            </form>
          </div>
  `;}
  function deleteUser(e) {
      const userId = e.target.dataset.id;
     formData = new FormData();
     formData.append('userId', userId);
     fetch( PATH+'api/users/delete',{
        credentials: "include",
        body: formData,
        method: 'POST'
     })
     .then(data => data.json())
     .then(response => {
      
      if(response.data.code == 200) {
        displayMessage('You successfully delete user!', 'success', 'usersData');
        e.target.parentElement.parentElement.remove();
      }

      if(response.data.code == 404) {
        displayMessage(response.data.message, 'success', 'usersData');
    
      }


      if(response.data.code == 409) {
        displayMessage(response.data.message, 'success', 'usersData');
      
      }
     });
  }


  function deleteAuction(e) {
 

    const auctionId = e.target.dataset.id;
  



    formData = new FormData();
    formData.append('auctionId', auctionId);
    fetch(PATH+'api/auction/delete',{
       credentials: "include",
       body: formData,
       method: 'POST'
    })
    .then(data => data.json())
    .then(response => {
     
     if(response.data.code == 200) {
       displayMessage('You successfully delete auction!', 'success', 'auctionData');
       e.target.parentElement.parentElement.remove();
     }

 
    });


  }


  function displayMessage(message, type, where) {
    const alertMessage = document.createElement('div');
    alertMessage.innerHTML = message;
    alertMessage.classList.add('alert', 'alert-'+type);
    document.querySelector('#'+where).append(alertMessage);
    setTimeout(()=>{alertMessage.remove()},3500);
   }
   document.addEventListener('click', function(e) {
    if(e.target.id == 'categoryBtnDelete') {
      e.preventDefault();
          deleteCategory(e.target)
    }
    if(e.target.id == 'categoryBtnUpdate') {
      e.preventDefault();
      formPrepareForUpdate(e.target);
    }
  
    if(e.target.id == 'changeDataCategoryBtn') {
      e.preventDefault();
     updateCategory();
    }
  
    if(e.target.id == 'userBtnDelete' ) {
      e.preventDefault();
      deleteUser(e);
    }
    if(e.target.id == 'auctionDelete') {
      e.preventDefault();
      deleteAuction(e);
      
    }
  });
  

