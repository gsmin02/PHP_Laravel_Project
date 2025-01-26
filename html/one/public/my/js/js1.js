document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('mainHeader');
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

	// 스크롤에 따른 헤더 축소 기능
	let lastScrollTop = 0;

	function toggleCompactHeader() {
		let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		if (window.innerWidth > 768) { // PC 화면에서만 작동
			if (scrollTop > lastScrollTop && scrollTop > 200) {
				header.classList.add('compact');
			} else if (scrollTop === 0) {
				header.classList.remove('compact'); // 페이지 최상단일 때 헤더 펼치기
			}
		} else {
			header.classList.remove('compact'); // 모바일에서는 항상 원래 헤더 유지
		}
		
		lastScrollTop = scrollTop;
	}

	window.addEventListener('scroll', toggleCompactHeader);
	window.addEventListener('resize', toggleCompactHeader);

	hamburgerMenu.addEventListener('click', function() {
		header.classList.toggle('compact'); // 헤더의 compact 클래스를 토글
	});

	menuToggle.addEventListener('click', function() {
		mainNav.classList.toggle('active');
		document.body.classList.toggle('menu-open');
	});

	const menuItems = mainNav.getElementsByTagName('a');
	for (let item of menuItems) {
		item.addEventListener('click', function() {
			mainNav.classList.remove('active');
			document.body.classList.remove('menu-open');
		});
	}

	window.addEventListener('resize', function() {
		if (window.innerWidth > 768) {
			mainNav.classList.remove('active');
			document.body.classList.remove('menu-open');
		}
	});
	
	// spinner 함수 생성
	var spinner = function () {
        setTimeout(function () {
            var spinnerElement = document.getElementById('spinner');
            if (spinnerElement) {
                spinnerElement.classList.remove('show');
            }
        }, 1);
    };
	spinner();
});