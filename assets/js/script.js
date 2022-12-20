const qSelect = q => document.querySelector(q);

const setDest = document.getElementById('set-dest');
const kostModal = document.getElementById('kostModal');
const latInput = document.getElementById('lat');
const lngInput = document.getElementById('lng');

let editMode = false;
let selectInfo;
let map, marker;

window.onclick = function(e){
  try{
    if(e.target === setDest){
      kostModal.style.width = '0';
      qSelect('div.modal-backdrop').style.width = '0';
      selectInfo.classList.remove('d-none');
    } else {
      kostModal.style.width = '100%';
      qSelect('div.modal-backdrop').style.width = '100%';
      selectInfo.classList.add('d-none');
    }
  } catch{}
}

window.initMap = function(){
  const center = { lat: -0.507068, lng: 101.447777 };
  map = new google.maps.Map(document.getElementById('map'), {
    center,
    zoom: 13,
  });

  marker = new google.maps.Marker({ map });

  selectInfo = document.createElement('div');
  selectInfo.className = 'fs-4 mt-2 px-2 py-1 bg-warning d-none';
  selectInfo.style.transform = 'translateX(-50%)';
  selectInfo.innerHTML = 'Silahkan pilih tujuan pengiriman dengan mengklik peta';

  map.controls[google.maps.ControlPosition.TOP_CENTER].push(selectInfo);

  map.addListener('click', (e) => {
    latInput.value = e.latLng.lat();
    lngInput.value = e.latLng.lng();
  });
}

function setModal(mode, el=null){
  modalLabel = document.getElementById('modalLabel');
  modeInput = qSelect('#kostModal input[name="mode"]');

  modeInput.value = mode;
  modalLabel.innerText = `${mode} data kost`;

  const keys = [ 'id', 'nama', 'harga', 'tersedia', 'lat', 'lng' ];
  if (mode === 'Edit') {
    const { nama, harga, tersedia, lat, lng } = el.dataset;
    const kostStatus = el.dataset.status || 'laki-laki';
    if (kostStatus === 'laki-laki') {
      qSelect('select > option[value="laki-laki"]').selected = true;
      qSelect('select > option[value="perempuan"]').selected = false;
    } else if (kostStatus === 'perempuan') {
      qSelect('select > option[value="laki-laki"]').selected = false;
      qSelect('select > option[value="perempuan"]').selected = true;
    }

    keys.forEach(e => {
      qSelect(`#kostModal input[name="${e}"]`).value = el.dataset[e] || 0;
    });
  } else if (mode === 'Tambah') {
    keys.forEach(e => {
      qSelect(`#kostModal input[name="${e}"]`).value = '';
    });
  }
}

const kosts = document.querySelectorAll('td > a[href="#top"]');
kosts.forEach(kost => {
  kost.addEventListener('click', () => {
    let { lat, lng } = kost.dataset;
    lat = parseFloat(lat);
    lng = parseFloat(lng);

    marker.setPosition({ lat, lng });
    map.setCenter({ lat, lng });
  });
});
