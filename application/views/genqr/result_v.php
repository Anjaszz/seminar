<style>


    img {
        left: 50px;
    }

    .imgA1 {
        max-width: 100%;
        height: auto; 
        position: relative;
        width: 80%;
        z-index: 3;
    }

    .imgB1 {
        position: absolute;
        z-index: 3;
        top: 27%;
        left:66%;
        width: 15%
    }
    @media only screen and (max-width: 480px) {
   
    .imgB1 {
      
        top: 30%;
        left:72%;
       
    }
}
.down {
    display: block;
    position: relative;
   left:40% ;
   margin-top: 1%;

}

</style>

<div class="col-sm-12">
    <img class="img-responsive imgA1" src="<?php echo base_url('uploads/tiket/tiket1.jpg'); ?>" />
    <img class="img-responsive imgB1" src="<?php echo base_url('uploads/qr_image/') . $nim . 'code.png'; ?>" />
    <button onclick="downloadImages()" class="down btn btn-primary">Download</button>
</div>

<script>
function downloadImages() {
    
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');

   
    var imgA = document.querySelector('.imgA1');
    var widthA = imgA.naturalWidth;
    var heightA = imgA.naturalHeight;

    
    var imgB = document.querySelector('.imgB1');
    var widthB = 220;
    var heightB = 220;

   
    canvas.width = widthA ; 
    canvas.height = heightA; 

    
    ctx.drawImage(imgA, 0, 0);

   
    var qrX = 978; 
    var qrY = 135;
    ctx.drawImage(imgB, qrX, qrY, widthB, heightB); 

    
    var dataURL = canvas.toDataURL('image/png');

   
    var link = document.createElement('a');
    link.download = 'combined_image.png';
    link.href = dataURL;
    
   
    document.body.appendChild(link);
    link.click();

    
    document.body.removeChild(link);
}
</script>
