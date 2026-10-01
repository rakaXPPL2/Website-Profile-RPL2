const searchInput = document.querySelector('#member-search');
const filterButtons = [...document.querySelectorAll('.filter-button')];
const memberCards = [...document.querySelectorAll('.member-card')];
const emptyState = document.querySelector('#empty-state');
const memberCount = document.querySelector('#member-count');

if (searchInput && memberCards.length) {
	let activeFilter = 'all';

	const updateMembers = () => {
		const query = searchInput.value.trim().toLocaleLowerCase('id');
		let visibleCount = 0;

		memberCards.forEach((card) => {
			const matchesQuery = card.dataset.name.includes(query)
				|| card.querySelector('.role-label').textContent.toLocaleLowerCase('id').includes(query);
			const matchesFilter = activeFilter === 'all' || card.dataset.role === activeFilter;
			const isVisible = matchesQuery && matchesFilter;

			card.hidden = !isVisible;
			visibleCount += Number(isVisible);
		});

		emptyState.hidden = visibleCount !== 0;
		memberCount.innerHTML = `Menampilkan ${visibleCount} anggota <span>•</span> XI RPL-2`;
	};

	searchInput.addEventListener('input', updateMembers);

	filterButtons.forEach((button) => {
		button.addEventListener('click', () => {
			activeFilter = button.dataset.filter;
			filterButtons.forEach((filterButton) => {
				const isActive = filterButton === button;
				filterButton.classList.toggle('is-active', isActive);
				filterButton.setAttribute('aria-pressed', String(isActive));
			});
			updateMembers();
		});
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === '/' && document.activeElement !== searchInput && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) {
			event.preventDefault();
			searchInput.focus();
		}
	});
}
