function mostrarVistaPrevia(input) {
    const conteinerPreview = document.getElementById('imagen-preview');
    const preview = document.getElementById('preview');
    const imageLabel = document.querySelector('label[for="image"]');
    
    if(input.files && input.files[0]){
       const reader = new FileReader();
       
       reader.onload = function(e){
            preview.onload = function() {
                const alturaMaxima = 210;
                const alturaFinal = Math.min(this.height, alturaMaxima) + 45;
                imageLabel.style.marginBottom = alturaFinal + 'px';
                conteinerPreview.style.display = 'block';
            };
            preview.src = e.target.result;
       }
       reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = "";
        conteinerPreview.style.display = 'none';
        if (imageLabel) {
            imageLabel.style.marginBottom = '';
        }
    }
}