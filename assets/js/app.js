console.log(PATH);


if(document.querySelector('#logout')) {
  const logoutBtn = document.querySelector('#logout');
  const submitBtn = document.querySelector('#logoutSubmit');
  logoutBtn.addEventListener('click', function() {
    submitBtn.click();
  });
}
if(document.querySelector('#submitOfferBtn')) {
const submitOfferBtn = document.querySelector('#submitOfferBtn');
submitOfferBtn.addEventListener('click', function(){
let offer = document.querySelector('#auctionOffer');
let auctionid = document.querySelector('#auctionId').value;
let formData = new FormData();
formData.append('auctionOffer', offer.value);
formData.append('auctionId', auctionid);
fetch(PATH+'api/auction/addOffer', {
  method: 'POST', // or 'PUT'
  body:  formData,
  credentials : 'include'
})
.then((response) => response.json())
.then((data) => {
  if(data.data.code == 409) {
   auctionFeedbackMessage(data.data.message, 'danger');
   return;
  }

  if(data.data.code == 204) {
    auctionFeedbackMessage(data.data.message, 'success');
    document.querySelector('#startedPrice').innerHTML = offer.value + '$';
    offer.value = '';
    return;
  }
 
})
.catch((error) => {
  auctionFeedbackMessage(error.message, 'danger');
});

});
}


function auctionFeedbackMessage(message,type) {
  const card = document.querySelector('.card');
  const alert = document.createElement('div');
  card.style.position = 'relative';
  alert.classList.add('alert', 'alert-' + type);
  alert.innerHTML = message;
  alert.id = 'alertMessage';
  card.appendChild(alert);
  setTimeout(function(){
    alert.remove();
  },3500)

}
if(document.querySelector('#searchAuctionsBtn')) {
  const searchAuctionBtn = document.querySelector('#searchAuctionsBtn');
  const searchWord = document.querySelector('#searchWord');
  const order = document.querySelector('#order');
  const priceMax = document.querySelector('#priceMax');
  const priceMin = document.querySelector("#priceMin");
  const categoryId = document.querySelector('#categoryId');
  searchAuctionBtn.addEventListener('click',function(e) {

      const formData = new FormData();
      formData.append('searchWord', searchWord.value);
      formData.append('order', order.value);
      formData.append('priceMax', priceMax.value);
      formData.append('priceMin', priceMin.value);
      formData.append('categoryId', categoryId.value);
    

    fetch(PATH+'api/auction/search', {
      method: 'POST',
      body : formData,
      credentials: 'include'
    })
    .then(data => data.json())
    .then(data => {
      console.log(data.auctions);
          if(document.querySelector('#searchresult')) {
            document.querySelector('#searchresult').remove();
          }
          const content = document.querySelector('#maincontent');
          const searchBox = document.createElement('div');
          let output = '';
          console.log(data.auctions);
          data.auctions.forEach((auction, index) => {
                output += `
                <tr>
                <th scope="row">${index+1}</th>
              <td>
                  <a href="${data.path}auction/${auction.id} ">${auction.title }</a>
                  </td>
              <td>${auction.maxPrice}$</td>
              <td> ${auction.end_date}</td>
                </tr>
                `
          });
          searchBox.classList.add('card', 'mb-5');

          searchBox.id = 'searchresult';
          searchBox.innerHTML = `
          <div class="card">
          <div class="card-header">
              <h3 class="text-center">Search Result</h3>
          </div>

          <div class="card-body">
              <table class="table table-image">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Auction Title</th>
                      <th scope="col">Started Price</th>
                      <th class='text-center' scope="col">End at</th>
                    </tr>
                  </thead>
                  <tbody>
                      ${output}
                  </tbody>
                </table>   
          </div>
      </div>
          `;
          content.prepend(searchBox);


          







    })

  })
      
}
    



if(document.querySelector("#feedbackbtn")) {


  const feedbackBtn = document.querySelector("#feedbackbtn");
  const auctionId = document.querySelector('#auctionId');
  const impression = document.querySelector('#impression');
  const senderId = document.querySelector('#senderId');
  const reciverId = document.querySelector('#reciverId');
  const feedbacks = document.querySelector('#feedbacks');
  feedbackBtn.addEventListener('click', function(e) {
       
    const formData = new FormData();

    formData.append('auctionId', auctionId.value);
    formData.append('impression', impression.value);
    formData.append('senderId', senderId.value);
    formData.append('reciverId', reciverId.value);
   


    fetch('/schoolproject/api/feedback/add/', {
      method: "POST",
      body: formData,
      credentials: "include",

    }).then(data => data.json())
    .then(response => {
      
feedbacks.innerHTML = '';

      if(response.data.code == 200) {
        impression.value = '';

        feedbacks.innerHTML = '';


        let output = '';


        response.data.feedbacks.forEach(feedback => {
          output += `
          <div class="card">
          <div class="card-header">
          <h4 class="text-center">${feedback.auction.title}</h4>
          </div>
          <div class="card-body">
          <p class="card-text">
          ${feedback.feedback_text}
          </p>   
          </div>


          <div class="card-footer d-flex justify-content-between ">
          <span class="card-text">${feedback.created_at}</span>
             <span class="card-text"> ${feedback.sender.firstname} ${feedback.sender.lastname} </span>
          </div>
        </div>
          `;
       });

       feedbacks.innerHTML = output;
       const alert = document.createElement('div');
       alert.classList.add('alert', 'alert-success');
       alert.innerHTML = 'You successfully added impression! Thank you!';
       document.querySelector('#form').appendChild(alert);
       setTimeout(()=> {
         alert.remove();
       }, 3500);
       
      }
      if(response.data.code == 409) {
        
      const alert = document.createElement('div');
      alert.classList.add('alert', 'alert-danger');
      alert.innerHTML = response.data.message;
      document.querySelector('#form').appendChild(alert);
      setTimeout(()=> {
        alert.remove();
      }, 3500);
      }
    }

      );
  });
}