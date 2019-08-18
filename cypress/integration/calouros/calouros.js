describe('Frist Testing', function () {
    it('Navigate', () => {

    apresentation()

    });
});

const GLOBALOOP = 100;

export const apresentation = () => {
    let cont = 0;
    while (cont < GLOBALOOP)
    {
        test2E2();
        cont++;
    }
};

export const test2E2 = () => {
    cy.visit('http://127.0.0.1:8000/');
    cy.wait(2000);

    cy.get('.scroll > .font-italic').click()
    cy.wait(1500);
    cy.get('.scroll > .btn').click()
    cy.wait(1500);

    cy.contains('REALIZAR TESTE!').click();

    cy.get('input[name=nome]').type('Candidato Apresentacao');
    cy.get('input[name=telefone]').type('61665548215');
    cy.get('input[name=email]').type('candidato@gmail.com');
    cy.get('select[name=cidade]').select('Gama');
    cy.get('select[name=serie]').select('Concluido');

    cy.wait(800);

    cy.contains('Enviar').click();

    cy.wait(1500);

    cy.contains('OK!').click();

    cy.get('#GpAA4').click();
    cy.get('#GpAA5').click();
    cy.get('#GpAB6').click();
    cy.get('#GpAB8').click();
    cy.get('#GpAB9').click();

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpBA1').click();
    cy.get('#GpBA7').click();
    cy.get('#GpBB5').click();
    cy.get('#GpBB3').click();
    cy.get('#GpBB4').click();

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpCA9').click();
    cy.get('#GpCA10').click();
    cy.get('#GpCB4').click();
    cy.get('#GpCB5').click();
    cy.get('#GpCB7').click();

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpDA9').click();
    cy.get('#GpDA10').click();
    cy.get('#GpDB4').click();
    cy.get('#GpDB5').click();
    cy.get('#GpDB7').click();

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpEA1').click();
    cy.get('#GpEA2').click();
    cy.get('#GpEB3').click();
    cy.get('#GpEB7').click();
    cy.get('#GpEB9').click();

    cy.wait(1000);
    cy.contains('Enviar').click();
    cy.wait(1500);
    cy.contains('Sim').click();

    cy.wait(1500);

    cy.get(':nth-child(1) > #dropdownMenuButton').click();
    cy.wait(1000);

    cy.get(':nth-child(2) > #dropdownMenuButton').click();
    cy.wait(1000);

    cy.get(':nth-child(3) > #dropdownMenuButton').click();
    cy.wait(1000);

    cy.get(':nth-child(4) > #dropdownMenuButton').click();
    cy.wait(1000);

    cy.get(':nth-child(5) > #dropdownMenuButton').click();
    cy.wait(1000);

    cy.get('.btn > strong').click();

}

