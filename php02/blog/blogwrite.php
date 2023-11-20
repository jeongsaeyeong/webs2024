<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" role="main">
        <div class="intro__inner blogStyle bmStyle container ">
            <div class="intro__img">
                <img srcset="../assets/img/Baroque_3.jpg 1x,
                ../assets/img/Baroque_3@2.jpg 2x,
                ../assets/img/Baroque_3@3.jpg 3x" alt="">
            </div>
            <div class="intro__text">
                <h3>블로그 게시글 작성</h3>
                <p>
                    전시와 관련된 감상평, 정보글을 쓸 수 있습니다.
                </p>
            </div>
        </div>

        <div class="blog__layout container">
            <div class="blog__contents">
                <setcion class="blog__wirte">
                    <form action="blogWriteSave.php" name="blogWriteSave" method="post" enctype="multipart/form-data">
                        <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                            <div>
                                <label for="blogCategory" class="blind">카테고리</label>
                                <select name="blogCategory" id="blogCategory">
                                    <option value="최신정보">최신 정보</option>
                                    <option value="강의정보">강의 정보</option>
                                    <option value="사이트정보">사이트 정보</option>
                                </select>
                            </div>
                            <div>
                                <label for="blogTitle" class="blind">제목</label>
                                <input type="text" id="blogTitle" name="blogTitle" placeholder="제목을 적어주세요!" class="input__style" required>
                            </div>
                            <div>
                                <label for="blogContents" class="blind">내용</label>
                                <textarea id="blogContents" name="blogContents" placeholder="내용을 적어주세요!"></textarea>
                            </div>
                            <div class="file">
                                <label for="blogFile" class="blind">파일</label>
                                <!-- accept=".jpg, .jpeg, .png, .gif, .webp" -->
                                <input type="file" id="blogFile" name="blogFile">
                                <p>jpg, gif, png, webp 파일만 넣을 수 있습니다. 이미지 용량은 1MB를 넘길 수 없습니다.</p>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn__style3">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
                </setcion>
            </div>
            <div class="blog__aside">
                <?php include "blogad.php" ?><br>
                <!-- blog__ad -->

                <?php include "blogIntro.php" ?><br>
                <!-- blogIntro -->

                <?php include "blogCategory.php" ?><br>
                <!-- blogCategory -->

                <?php include "blogPopular.php" ?><br>
                <!-- blogPopular -->

                <?php include "blogComment.php" ?>
                <!-- blogComment -->

            </div>
        </div>
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/translations/ko.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#blogContents'), {
                language: 'ko' 
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>