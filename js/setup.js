'use strict';

var WIZARD_NAMES = ['Иван', 'Хуан Себастьян', 'Мария', 'Кристоф', 'Виктор', 'Юлия', 'Люпита', 'Вашингтон'],
    WIZARD_SURNAMES = ['да Марья', 'Верон', 'Мирабелла', 'Вальц', 'Онопко', 'Топольницкая', 'Нионго', 'Ирвинг'],
    WIZARD_EYES_COLOR = ['black', 'red', 'blue', 'yellow', 'green'],
    WIZARD_COAT_COLOR = ['rgb(101, 137, 164)', 'rgb(241, 43, 107)', 'rgb(146, 100, 161)', 'rgb(56, 159, 117)', 'rgb(215, 210, 55)', 'rgb(0, 0, 0)'],
    createdWizards = [],

    showSetup = function () {
      var setup = document.querySelector('.setup');

      setup.classList.remove('hidden');
    },

    createWizardArr = function () {
      var wizardsQuantity = 4;

      for (var i = 0; i < wizardsQuantity; i++) {

        var randomName = Math.floor(Math.random() * WIZARD_NAMES.length),
            randomSurName = Math.floor(Math.random() * WIZARD_SURNAMES.length),
            randomCoatCol = Math.floor(Math.random() * WIZARD_COAT_COLOR.length),
            randomEyesCol = Math.floor(Math.random() * WIZARD_EYES_COLOR.length),
            currentWizard = {
              name: WIZARD_NAMES[randomName] + ' ' + WIZARD_SURNAMES[randomSurName],
              coatColor: WIZARD_COAT_COLOR[randomCoatCol],
              eyesColor: WIZARD_EYES_COLOR[randomEyesCol]
            }
        createdWizards.push(currentWizard);
      }
      return createdWizards;
    },

    renderWizard = function (wizards) {
      var template = document.querySelector('#similar-wizard-template'),
          similarList = document.querySelector('.setup-similar-list'),
          fragment = document.createDocumentFragment();

      for (var i = 0; i < wizards.length; i++) {
        var wizardElement = template.cloneNode(true);
        var wizardElementContent = template.cloneNode(true).content.querySelector('.setup-similar-item');

        wizardElementContent.querySelector('.setup-similar-label').textContent = wizards[i].name;
        wizardElementContent.querySelector('.wizard-coat').style.fill = wizards[i].coatColor;
        wizardElementContent.querySelector('.wizard-eyes').style.fill = wizards[i].eyesColor;

        fragment.appendChild(wizardElementContent);
      }

      similarList.appendChild(fragment);
      document.querySelector('.setup-similar').classList.remove('hidden');
    }



showSetup ();
createWizardArr ();
renderWizard (createdWizards);

