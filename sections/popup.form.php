<style>
  #popupOverlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
  }

  .popup {
    position: relative;
    margin: 100px auto;
    width: 500px;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
    text-align: center;
  }

  .closeBtn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
  }

  .openPopupBtn {
    cursor: pointer;
  }

  @media screen and (min-width: 768px) {
    .hide-on-mobile {
      /* display: block; */
      /* background-color: red; */
    }
  }
</style>

<!-- <button class="openPopupBtn">Open Popup</button>
<button class="openPopupBtn">Open Popup</button>
<button class="openPopupBtn">Open Popup</button>
<button class="openPopupBtn">Open Popup</button> -->

<div id="popupOverlay" class="overlay">
  <div class="popup">
    <span class="closeBtn" id="closePopupBtn">&times;</span>
    <div class="faq-wrapper">
      <div class="contract-phone" data-aos="fade-right" data-aos-delay="200">
        <div class="title">
          <h2>Get In Touch</h2>
        </div>
        <form action="#">
          <div class="input-wrap">
            <input type="text" placeholder="Phone">
          </div>
          <div class="input-wrap">
            <input type="email" placeholder="Email">
          </div>
          <div class="input-wrap">
            <textarea placeholder="Write Message"></textarea>
          </div>
          <div class="submit-btn">
            <button type="submit">Book Appointment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const openPopupBtns = document.querySelectorAll('.openPopupBtn');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const popupOverlay = document.getElementById('popupOverlay');

    openPopupBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        popupOverlay.style.display = 'block';
      });
    });

    closePopupBtn.addEventListener('click', () => {
      popupOverlay.style.display = 'none';
    });

    popupOverlay.addEventListener('click', (event) => {
      if (event.target === popupOverlay) {
        popupOverlay.style.display = 'none';
      }
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        popupOverlay.style.display = 'none';
      }
    });

    // Automatically open the popup after 3 seconds
    setTimeout(() => {
      popupOverlay.style.display = 'block';
    }, 3000); // 3000 milliseconds = 3 seconds
  });
</script>
