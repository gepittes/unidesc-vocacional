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
    cy.wait(1000);

    cy.contains('REALIZAR TESTE!').click();

    cy.get('input[name=nome]').type('Ana', {delay: 70});
    cy.get('input[name=telefone]').type('61978545450', {delay: 70});
    cy.get('input[name=email]').type('calouro2019@gmail.com', {delay: 70});
    cy.get('select[name=cidade]').select('Gama');
    cy.get('select[name=serie]').select('Concluido');

    cy.wait(1000);

    cy.contains('Enviar').click();

    cy.get('input[name=nome]').clear();
    cy.get('input[name=nome]').type('Calouro UNIDESC 2019', {delay: 70});
    cy.wait(1000);
    cy.contains('Enviar').click();

    cy.wait(1500);

    cy.contains('OK!').click();

    cy.get('#GpAA4').click(); cy.wait(300);
    cy.get('#GpAA5').click(); cy.wait(300);
    cy.get('#GpAB6').click(); cy.wait(300);
    cy.get('#GpAB8').click(); cy.wait(300);
    cy.get('#GpAB9').click(); cy.wait(300);

    cy.wait(700);
    cy.contains('Proximo').click();

    cy.get('#GpBA1').click(); cy.wait(300);
    cy.get('#GpBA7').click(); cy.wait(300);
    cy.get('#GpBB3').click(); cy.wait(300);
    cy.get('#GpBB4').click(); cy.wait(300);

    cy.wait(700);
    cy.contains('Proximo').click();

    cy.get('#GpCA9').click(); cy.wait(300);
    cy.get('#GpCA10').click(); cy.wait(300);
    cy.get('#GpCB4').click(); cy.wait(300);
    cy.get('#GpCB5').click(); cy.wait(300);
    cy.get('#GpCB7').click(); cy.wait(300);

    cy.wait(700);
    cy.contains('Proximo').click();

    cy.get('#GpDA9').click(); cy.wait(300);
    cy.get('#GpDA10').click(); cy.wait(300);
    cy.get('#GpDB4').click(); cy.wait(300);
    cy.get('#GpDB5').click(); cy.wait(300);
    cy.get('#GpDB7').click(); cy.wait(300);

    cy.wait(700);
    cy.contains('Proximo').click();

    cy.get('#GpEA1').click(); cy.wait(300);
    cy.get('#GpEA2').click(); cy.wait(300);
    cy.get('#GpEB7').click(); cy.wait(300);
    cy.get('#GpEB9').click(); cy.wait(300);

    cy.wait(700);
    cy.contains('Enviar').click();
    cy.wait(1200);
    cy.contains('Sim').click();

    cy.wait(1500);

    cy.get(':nth-child(1) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(2) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(3) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(4) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(5) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get('.btn > strong').click();

    cy.wait(1500);

};

