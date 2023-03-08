<?php include "header.php"; ?>
<div class="container bg-light h-100">

  
  
  <div class="container">
  <form id="product_form" style="max-width: 400px;">
    <div class="form-group">
      <label for="sku">SKU:</label>
      <input type="text" class="form-control" id="sku" required>
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" required>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" required>
    </div>
    <div class="form-group">
      <label for="productType">Product Type:</label>
      <select class="form-control" id="productType" required>
        <option value="">Please select a product type<i class="fa fa-chevron-circle-down"style="font-size:24px" class="fa fa-align-right" aria-hidden="true" class="fa">&#xf13a;</i></option>
        <option value="DVD">DVD</option>
        <option value="Book">Book</option>
        <option value="Furniture">Furniture</option>
      </select>
      <div class="dropdown-icon"></div>
      

    </div>
    

<script>
  const productTypeSpecific = document.getElementById("productTypeSpecific");
  const productType = document.getElementById("productType");
  const skuInput = document.getElementById("sku");
  const submitBtn = document.getElementById("submit_btn");
  const cancelBtn = document.getElementById("cancel_btn");
  const notification = document.getElementById("notification");
  const products = [];

  productType.addEventListener("change", () => {
    const type = productType.value;
    let html = "";
    let description = "";
    switch (type) {
      case "DVD":
        html = `<div class="form-group">
                    <label for="size">Size (in MB):</label>
                    <input type="number" class="form-control" id="size" required>
                </div>`;
        description = "Please provide size (in MB)";
        break;
      case "Book":
        html = `<div class="form-group">
                    <label for="weight">Weight (in Kg):</label>
                    <input type="number" class="form-control" id="weight" required>
                </div>`;
        description = "Please provide weight (in Kg)";
        break;
      case "Furniture":
        html = `<div class="form-group">
                    <label for="height">Height (in cm):</label>
                    <input type="number" class="form-control" id="height" required>
                </div>
                <div class="form-group">
                    <label for="width">Width (in cm):</label>
                    <input type="number" class="form-control" id="width" required>
                </div>
                <div class="form-group">
                    <label for="length">Length (in cm):</label>
                    <input type="number" class="form-control" id="length" required>
                </div>`;
        description = "Please provide dimensions (HxWxL in cm)";
        break;
      default:
        html = "";
        description = "";
    }
    productTypeSpecific.innerHTML = html;
    notification.innerHTML = description;
  });

  submitBtn.addEventListener("click", (event) => {
    event.preventDefault();
   
  });
</script>


<?php include "footer.php"; ?>