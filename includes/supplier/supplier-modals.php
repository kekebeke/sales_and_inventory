<?php $supplier = $function->getData('supplier', 'id', $row['id']); ?>

<!-- Delete Supplier Modal -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>">
  <div class="modal-dialog modal-sm">
    <div class="card card-danger modal-content">
      <div class="card-header">
        <h3 class="card-title">DELETE SUPPLIER</h3>
      </div>
      <div class="card-body">

        <div class="form-group row">
          <div class="col-sm-12">
            <p>Are you sure you want to delete this supplier?</p>
            <b><?php echo $row['name']; ?></b>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <form method="post" action="<?php echo '?supplier_id='. $row['id']; ?>" class="form-horizontal">
          <button type="submit" class="btn btn-default float-left">Cancel</button>
          <button type="submit" name="delete_supplier" class="btn btn-danger float-right">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Supplier Modal -->
<div class="modal fade" id="update<?php echo $row['id']; ?>">
  <div class="modal-dialog">
    <div class="card card-info modal-content">
      <div class="card-header">
        <h3 class="card-title">UPDATE SUPPLIER</h3>
      </div>
      <form method="post" action="<?php echo '?supplier_id='. $row['id']; ?>" class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="inputName" class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
              <input type="text" name="name" value="<?php echo $supplier['name']; ?>" class="form-control" id="inputName" maxlength="35" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
            <div class="col-sm-8">
              <textarea name="address" class="form-control" rows="3" id="inputAddress" required><?php echo $supplier['address']; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
            <div class="col-sm-8">
              <input type="text" name="phone_number" value="<?php echo $supplier['phone_number']; ?>" class="form-control" id="inputPhoneNumber" minlength="13"
                maxlength="13" required>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-default float-left">CANCEL</button>
          <button type="submit" name="update_supplier" class="btn btn-info float-right">UPDATE</button>
        </div>
      </form>
    </div>
  </div>
</div>