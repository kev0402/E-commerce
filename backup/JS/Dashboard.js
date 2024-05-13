// ---------------------------------------     Main Page     --------------------------------------------

let MainDashboard = document.getElementById('MainDashboard');

let MainDashboardIcon = document.getElementById('MainDashboardIcon');

let MainProductList = document.getElementById('MainProductList');

let MainAddProduct = document.getElementById('MainAddProduct');

let MainEditProduct = document.getElementById('MainEditProduct');

let AddProductIcon = document.getElementById('AddProductIcon');

let ProductListIcon = document.getElementById('ProductListIcon');

let AddProductSubmitBtn = document.getElementById('AddProductSubmitBtn');

MainDashboardIcon.onclick = function(){
    MainDashboard.style.display = 'flex';    
    MainAddProduct.style.display = 'none';   
    MainProductList.style.display = 'none';    
    MainEditProduct.style.display = 'none';
    MainDashboardIcon.style.background = "#FFCFD4";    
    AddProductIcon.style.background = "none";    
    ProductListIcon.style.background = "none";


}

function hi(){
    MainDashboard.style.display = 'flex';    
    MainAddProduct.style.display = 'none';   
    MainProductList.style.display = 'none';
    MainDashboardIcon.style.background = "#FFCFD4";    
    AddProductIcon.style.background = "none";    
    ProductListIcon.style.background = "none";
}

AddProductIcon.onclick = function(){
    MainAddProduct.style.display =' flex';
    MainDashboard.style.display = 'none';      
    MainProductList.style.display = 'none';        
    MainEditProduct.style.display = 'none';    
    AddProductIcon.style.background = "#FFCFD4";
    MainDashboardIcon.style.background = "none";    
    ProductListIcon.style.background = "none";

}

ProductListIcon.onclick = function(){
    MainProductList.style.display =' flex';
    MainAddProduct.style.display = 'none';       
     MainDashboard.style.display = 'none';    
     ProductListIcon.style.background = "#FFCFD4";
    AddProductIcon.style.background = "none";    
    MainDashboardIcon.style.background = "none";    
}
















// ---------------------------------------     Add Product     --------------------------------------------

let ImageSet=()=>{
    let UploadFile = document.getElementById('UploadFile');

    let DisplayImage = document.getElementById('DisplayImage');

    //Convert the image file to url
    var ImgURL = URL.createObjectURL(UploadFile.files[0]);

    DisplayImage.src = ImgURL;

    
}

// ---------------------------------------     Edit Product     --------------------------------------------

let EditImageSet=()=>{
    let EditUploadFile = document.getElementById('EditUploadFile');

    let EditDisplayImage = document.getElementById('EditDisplayImage');

    //Convert the image file to url
    var EditImgURL = URL.createObjectURL(EditUploadFile.files[0]);

    EditDisplayImage.src = EditImgURL;

    
}


