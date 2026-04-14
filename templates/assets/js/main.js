
/* ── SCVHistory Photo Lightbox ───────────────────────────────────────── */
(function() {
  var lb, lbImg, lbCaption, lbCounter;
  var gallery = [], currentIndex = 0;

  function initLightbox() {
    lb        = document.getElementById('scv-lightbox');
    lbImg     = document.getElementById('scv-lb-img');
    lbCaption = document.getElementById('scv-lb-caption');
    lbCounter = document.getElementById('scv-lb-counter');
    if (!lb) return;
    lb.addEventListener('click', function(e) {
      if (e.target === lb) scvCloseLightbox();
    });
    document.addEventListener('keydown', function(e) {
      if (!lb || !lb.classList.contains('is-open')) return;
      if (e.key === 'Escape') scvCloseLightbox();
      if (e.key === 'ArrowLeft') scvLightboxNav(-1);
      if (e.key === 'ArrowRight') scvLightboxNav(1);
    });
  }

  function renderSlide() {
    var p = gallery[currentIndex];
    lbImg.src = p.full;
    lbImg.alt = p.alt || '';
    var cap = '';
    if (p.date)    cap += '<span class="scv-lightbox__date">' + p.date + '</span>';
    if (p.caption) cap += p.caption;
    if (p.credit)  cap += '<span class="scv-lightbox__credit">' + p.credit + '</span>';
    lbCaption.innerHTML = cap;
    lbCounter.textContent = (currentIndex + 1) + ' / ' + gallery.length;
  }

  window.scvOpenLightbox = function(index, btn) {
    if (!lb) initLightbox();
    if (!lb) return;
    var galleryEl = btn.closest('.scv-photo-gallery');
    gallery = JSON.parse(galleryEl.getAttribute('data-gallery') || '[]');
    if (!gallery.length) return;
    currentIndex = index;
    renderSlide();
    lb.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  };

  window.scvCloseLightbox = function() {
    if (!lb) return;
    lb.classList.remove('is-open');
    document.body.style.overflow = '';
    lbImg.src = '';
  };

  window.scvLightboxNav = function(dir) {
    if (!gallery.length) return;
    currentIndex = (currentIndex + dir + gallery.length) % gallery.length;
    renderSlide();
  };

  // Init on DOM ready
  document.addEventListener('DOMContentLoaded', initLightbox);
})();
