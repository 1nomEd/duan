<style>
    .list-img>img {
        height: 100px;
        width: 100px;
        object-fit: cover;
    }
</style>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Thêm Sản Phẩm</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?act=home">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="index.php?act=listsp">Sản Phẩm </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thêm Sản Phẩm </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=createsp" class="form-input" method="post" enctype="multipart/form-data">
                <div class="form-group pb-4">
                    <label for="" class="label pt-2">
                        Tên Sản Phẩm
                    </label><br />
                    <input type="text" name="product_name" id="" value="" placeholder="Nhập tên sản phẩm " required
                        class="input w-75 rounded-2"><br />

                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <input type="file" name="images[]" multiple accept="image/*" width="150px"
                        class="input w-75 rounded-2 fileImage"><br />
                    <div class="list-img">

                    </div>
                    <script>
                        let listImg = document.querySelector('.list-img');
                        let fileImage = document.querySelector('.fileImage');
                        fileImage.onchange = function () {
                            let file = fileImage.files;
                            console.log(file);
                            for (let i = 0; i < file.length; i++) {
                                let img = document.createElement('img');
                                img.src = URL.createObjectURL(file[i]);
                                listImg.appendChild(img);
                            }

                        }
                    </script>

                    <label for="" class="label pt-2">
                        Giá
                    </label><br />
                    <input type="number" name="price" id="" value="" placeholder="Nhập số lượng " required
                        class="input w-75 rounded-2"><br />

                    <label for="" class="label pt-2">
                        Mô Tả
                    </label><br />
                    <textarea name="description" id="" cols="105" rows="5" class="rounded-2" required></textarea><br />

                    







                    <label for="" class="label pt-3">Danh Mục</label><br />
                    <select name="category_id" id="" class="rounded-2 ">

                        <?php
                        foreach ($sellect_categories as $danhmuc): ?>
                            <?php extract($danhmuc); 
                           
                            ?>
                            <option value="<?= $category_id ?>">
                                <?= $category_name ?>
                            </option>

                        <?php endforeach;
                        ?>


                    </select>

                    <div class="notification">
                        <?php
                        if (isset($Notification) && $Notification != "") {
                            echo $Notification;
                        }
                        ?>
                    </div>
                </div>


                <a href="index.php?act=createsp"><input type="submit" name="submitsp" id="" value="Thêm"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
            </form>
            <a href="index.php?act=listsp"><button class="btn btn-insert  status completed mt-4">Về Trang Danh Sách
                </button></button></a>
            <div class="notification">
                <?php
                if (isset($Notification) && $Notification != "") {

                }

                ?>


            </div>

        </div>

</main>