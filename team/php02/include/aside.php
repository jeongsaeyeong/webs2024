<aside id="side_wrap">
    <form action="../board/board_result.php?search=" method="get" class="search_box side_box roundCorner shaDow">
        <input type="text" name="search" placeholder="취중진담 통합 검색" id="search">
        <button type="submit" id="searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <?php if (isset($_SESSION['myMemberId'])) { ?>
        <div class="info_box side_box roundCorner shaDow">
            <div class="login_info">
                <img src="../assets/img/img500.jpg" alt="유저 이미지">
                <p>
                    <?= $_SESSION['youName'] ?>님 어서오세요.
                </p>
                <ul>
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="../mypage/mypage.php">마이페이지</a></li>
                </ul>
            </div>
            <button class="sideBtn" onclick="location.href='../board/board_write.php'">새 글쓰기</button>
        </div>

    <?php } else { ?>
        <div class="info_box side_box roundCorner shaDow">
            <div class="login_info not_login">
                <p><i class="fa-solid fa-icons"></i> <br> 회원가입하고 <br> 더 많은 기능을 누리세요</p>
                <ul>
                    <li><a href="../join/join.php">회원가입</a></li>
                    <li><a href="findpass.html">회원정보 찾기</a></li>
                </ul>
            </div>
            <button class="sideBtn" onclick="location.href='../login/login.php'">로그인</button>
        </div>
    <?php } ?>
</aside>
<!-- side_box end -->