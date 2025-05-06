const swiper = new Swiper(".swiper", {
  // Efeito de transição (pode ser 'fade', 'cube', etc)
  effect: "slide",
  // Loop infinito
  loop: true,
  // Autoplay (3 segundos)
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  // Paginação (bolinhas)
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // Botões de navegação
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // Velocidade da transição (ms)
  speed: 1000,
});

// Dados das plantas (em um projeto real, isso viria de um banco de dados)
const plantsData = {
  1: {
    title: "Costela-de-Adão",
    scientific: "Monstera deliciosa",
    description:
      "A Costela-de-Adão é uma planta tropical conhecida por suas folhas grandes, brilhantes e recortadas naturalmente. Originária das florestas tropicais da América Central, é perfeita para trazer um toque de selva para ambientes internos. Suas folhas jovens são inteiras e vão desenvolvendo os característicos recortes conforme amadurecem.",
    image: "../img/OIP.jpeg",
    light: "Meia-sombra",
    water: "Moderada",
    size: "Grande (até 3m)",
    climate: "Tropical",
    care: [
      "Prefere locais com luz indireta brilhante",
      "Regar quando o solo estiver seco ao toque",
      "Aprecia alta umidade ambiental",
      "Beneficia-se de suporte para trepar",
      "Limpar as folhas regularmente",
    ],
    facts:
      "Na natureza, produz um fruto comestível que lembra o sabor do abacaxi.",
  },
  2: {
    title: "Suculenta",
    scientific: "Echeveria elegans",
    description:
      "As suculentas são plantas resistentes que armazenam água em suas folhas, caules ou raízes. A Echeveria elegans forma belas rosetas simétricas de folhas carnudas e é ideal para jardins de pedra ou vasos ornamentais.",
    image: "../img/OIP.jpeg",
    light: "Sol pleno",
    water: "Pouca",
    size: "Pequena (15-20cm)",
    climate: "Árido",
    care: [
      "Necessita de muita luz solar direta",
      "Regar somente quando o solo estiver completamente seco",
      "Solo bem drenado é essencial",
      "Evitar água nas folhas para não causar apodrecimento",
      "Proteger de geadas",
    ],
    facts:
      "Muitas suculentas mudam de cor conforme a exposição ao sol e variações de temperatura.",
  },
  3: {
    title: "Orquídea",
    scientific: "Phalaenopsis spp.",
    description:
      "Conhecidas por suas flores exóticas e duradouras, as orquídeas Phalaenopsis são epífitas, ou seja, na natureza crescem sobre outras plantas sem parasitá-las. São ideais para interiores com boa luminosidade.",
    image: "../img/OIP.jpeg",
    light: "Luz filtrada",
    water: "Moderada",
    size: "Médio (30-60cm)",
    climate: "Tropical",
    care: [
      "Regar mergulhando o vaso e deixando escorrer completamente",
      "Prefere vasos transparentes para que as raízes recebam luz",
      "Fertilizar durante o período de crescimento",
      "Manter em local com boa ventilação",
      "Podar hastes florais após a floração",
    ],
    facts: "Algumas orquídeas podem florescer por até 3 meses consecutivos.",
  },
  4: {
    title: "Costela-de-Adão",
    scientific: "Monstera deliciosa",
    description:
      "A Costela-de-Adão é uma planta tropical conhecida por suas folhas grandes, brilhantes e recortadas naturalmente. Originária das florestas tropicais da América Central, é perfeita para trazer um toque de selva para ambientes internos. Suas folhas jovens são inteiras e vão desenvolvendo os característicos recortes conforme amadurecem.",
    image: "../img/OIP.jpeg",
    light: "Meia-sombra",
    water: "Moderada",
    size: "Grande (até 3m)",
    climate: "Tropical",
    care: [
      "Prefere locais com luz indireta brilhante",
      "Regar quando o solo estiver seco ao toque",
      "Aprecia alta umidade ambiental",
      "Beneficia-se de suporte para trepar",
      "Limpar as folhas regularmente",
    ],
    facts:
      "Na natureza, produz um fruto comestível que lembra o sabor do abacaxi.",
  },
  5: {
    title: "Suculenta",
    scientific: "Echeveria elegans",
    description:
      "As suculentas são plantas resistentes que armazenam água em suas folhas, caules ou raízes. A Echeveria elegans forma belas rosetas simétricas de folhas carnudas e é ideal para jardins de pedra ou vasos ornamentais.",
    image: "../img/OIP.jpeg",
    light: "Sol pleno",
    water: "Pouca",
    size: "Pequena (15-20cm)",
    climate: "Árido",
    care: [
      "Necessita de muita luz solar direta",
      "Regar somente quando o solo estiver completamente seco",
      "Solo bem drenado é essencial",
      "Evitar água nas folhas para não causar apodrecimento",
      "Proteger de geadas",
    ],
    facts:
      "Muitas suculentas mudam de cor conforme a exposição ao sol e variações de temperatura.",
  },
  6: {
    title: "Orquídea",
    scientific: "Phalaenopsis spp.",
    description:
      "Conhecidas por suas flores exóticas e duradouras, as orquídeas Phalaenopsis são epífitas, ou seja, na natureza crescem sobre outras plantas sem parasitá-las. São ideais para interiores com boa luminosidade.",
    image: "../img/OIP.jpeg",
    light: "Luz filtrada",
    water: "Moderada",
    size: "Médio (30-60cm)",
    climate: "Tropical",
    care: [
      "Regar mergulhando o vaso e deixando escorrer completamente",
      "Prefere vasos transparentes para que as raízes recebam luz",
      "Fertilizar durante o período de crescimento",
      "Manter em local com boa ventilação",
      "Podar hastes florais após a floração",
    ],
    facts: "Algumas orquídeas podem florescer por até 3 meses consecutivos.",
  },
  // Adicione os dados das outras plantas seguindo o mesmo padrão
};

// Configurar o modal quando um card é clicado
document.addEventListener("DOMContentLoaded", function () {
  const plantModal = document.getElementById("plantModal");

  if (plantModal) {
    plantModal.addEventListener("show.bs.modal", function (event) {
      const button = event.relatedTarget; // Botão que acionou o modal
      const plantId = button.getAttribute("data-plant-id");
      const plant = plantsData[plantId];

      // Atualizar o modal com os dados da planta
      document.getElementById("plantModalTitle").textContent = plant.title;
      document.getElementById("scientificName").textContent = plant.scientific;
      document.getElementById("lightRequirement").textContent = plant.light;
      document.getElementById("waterRequirement").textContent = plant.water;
      document.getElementById("plantSize").textContent = plant.size;
      document.getElementById("climate").textContent = plant.climate;
      document.getElementById("plantDescription").textContent =
        plant.description;
      document.getElementById(
        "plantFacts"
      ).innerHTML = `<i class="fas fa-seedling me-2"></i> ${plant.facts}`;

      // Atualizar a lista de cuidados
      const careList = document.getElementById("plantCare");
      careList.innerHTML = "";
      plant.care.forEach((item) => {
        const li = document.createElement("li");
        li.className = "list-group-item";
        li.textContent = item;
        careList.appendChild(li);
      });

      // Atualizar a imagem (em um projeto real, você poderia usar a imagem específica)
      document.querySelector(".modal-plant-img").src = plant.image;
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".year-btn");
  const projectItems = document.querySelectorAll(".project-item");
  const noProjectsMessage = document.getElementById("noProjects");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Ativar/desativar botão
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");

      const filterValue = this.getAttribute("data-filter");
      let visibleItems = 0;

      // Filtrar projetos
      projectItems.forEach((item) => {
        const year = item.getAttribute("data-year");

        if (filterValue === "all" || year === filterValue) {
          item.style.display = "block";
          visibleItems++;
        } else {
          item.style.display = "none";
        }
      });

      // Mostrar mensagem se não houver projetos
      if (visibleItems === 0) {
        noProjectsMessage.style.display = "block";
        document.getElementById("projectsContainer").style.display = "none";
      } else {
        noProjectsMessage.style.display = "none";
        document.getElementById("projectsContainer").style.display = "flex";
      }
    });
  });
});
