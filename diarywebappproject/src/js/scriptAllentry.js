const editButton = document.getElementById('edit-trigger')
const modalContainer = document.getElementById('modal-cont');
const closeButton = document.getElementById('close-trigger');

let isModalOpen = true;

const openModal = () => {
	if (isModalOpen) {
	  modalContainer.style.display = 'block';
	} else {
	  modalContainer.style.display = 'none'; 
	}
	isModalOpen = !isModalOpen;
  }
editButton.addEventListener('click' , openModal);
closeButton.addEventListener('click' , openModal)
