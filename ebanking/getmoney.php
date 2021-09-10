<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: 20px">
      <h3>::บันทึกรายการเติมเงิน::</h3>
      <br />
      <form action="phpMySQLForm.php" method="post" class="form-horizontal">
          <label>รหัสอ้างอิง</label>
    <input type="text" name="refer_pass"><br>
    <label>ช่องทาง ได้แก่ TrueMoney, โอนเงิน, บัตรเครดิต</label>
    <input type="text" name="get_money"><br>
    <label>บัญชีกระเป๋าเงินอิเล็กทรีอนิกส์</label>
    <input type="text" name="nameacc"><br>
    <label>จํานวนเงิน</label>
    <input type="text" name="amount"><br>
    <button type="submit" name="save" class="btn btn-primary">บันทึก
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>