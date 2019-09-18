describe('Frist Testing', function () {
    it('Navigate', () => {

        apresentation()

    });
});

const GLOBALOOP = 50;

export const apresentation = () => {
    let cont = 0;
    while (cont < GLOBALOOP)
    {
        test2E2();
        cont++;
    }
};

export const test2E2 = () => {
    // cy.visit('http://165.227.34.129/');
    cy.visit('http://localhost:8000/');

    cy.contains('REALIZAR TESTE!').click();

    cy.get('input[name=nome]').type('Teste de Carga Email');
    cy.get('input[name=telefone]').type('61978545450');
    cy.get('input[name=email]').type('mekdek1@gmail.com');
    cy.get('select[name=cidade]').select('Gama');
    cy.get('select[name=serie]').select('Concluido');

    cy.contains('Enviar').click();

    cy.wait(1500);

    cy.contains('OK!').click();

    cy.get('#GpAA4').click(); cy.wait(50);
    cy.get('#GpAA5').click(); cy.wait(50);
    cy.get('#GpAB6').click(); cy.wait(50);
    cy.get('#GpAB8').click(); cy.wait(50);
    cy.get('#GpAB9').click(); cy.wait(50);

    cy.contains('Proximo').click();

    cy.get('#GpBA1').click(); cy.wait(50);
    cy.get('#GpBA7').click(); cy.wait(50);
    cy.get('#GpBB3').click(); cy.wait(50);
    cy.get('#GpBB4').click(); cy.wait(50);

    cy.contains('Proximo').click();

    cy.get('#GpCA9').click(); cy.wait(50);
    cy.get('#GpCA10').click(); cy.wait(50);
    cy.get('#GpCB4').click(); cy.wait(50);
    cy.get('#GpCB5').click(); cy.wait(50);
    cy.get('#GpCB7').click(); cy.wait(50);

    cy.contains('Proximo').click();

    cy.get('#GpDA9').click(); cy.wait(50);
    cy.get('#GpDA10').click(); cy.wait(50);
    cy.get('#GpDB4').click(); cy.wait(50);
    cy.get('#GpDB5').click(); cy.wait(50);
    cy.get('#GpDB7').click(); cy.wait(50);

    cy.contains('Proximo').click();

    cy.get('#GpEA1').click(); cy.wait(50);
    cy.get('#GpEA2').click(); cy.wait(50);
    cy.get('#GpEB7').click(); cy.wait(50);
    cy.get('#GpEB9').click(); cy.wait(50);

    cy.contains('Enviar').click();
    cy.contains('Sim').click();


};

