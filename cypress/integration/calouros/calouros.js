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

export const obterValueAleatorio = (tamanho, tipo) => {
    let value = 'ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz';
    let aleatorio = '';
    if(tipo){
        value = '0123456789'
    }
    for (let i = 0; i < tamanho; i++) {
        let rnum = Math.floor(Math.random() * value.length);
        aleatorio += value.substring(rnum, rnum + 1);
    }
    return aleatorio;
}

export const test2E2 = () => {
    cy.visit('http://127.0.0.1:8000/');
    cy.wait(2000);

    cy.get('.scroll > .font-italic').click();
    cy.wait(1500);
    cy.get('.scroll > .btn').click();
    cy.wait(1500);

    cy.contains('REALIZAR TESTE!').click();

    cy.get('input[name=nome]').type(obterValueAleatorio(3, false), {delay: 70});
    cy.get('input[name=telefone]').type(obterValueAleatorio(11, true), {delay: 70});
    cy.get('input[name=email]').type(`${obterValueAleatorio(15, false)}@gmail.com`, {delay: 70});
    cy.get('select[name=cidade]').select('Gama');
    cy.get('select[name=serie]').select('Concluido');

    cy.wait(1200);

    cy.contains('Enviar').click();

    cy.get('input[name=nome]').clear();
    cy.get('input[name=nome]').type(`${obterValueAleatorio(5, false)} ${obterValueAleatorio(8, false)}`, {delay: 70});
    cy.wait(1200);
    cy.contains('Enviar').click();

    cy.wait(2000);

    cy.contains('OK!').click();

    cy.get('#GpAA4').click(); cy.wait(500);
    cy.get('#GpAA5').click(); cy.wait(500);
    cy.get('#GpAB6').click(); cy.wait(500);
    cy.get('#GpAB8').click(); cy.wait(500);
    cy.get('#GpAB9').click(); cy.wait(500);

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpBA1').click(); cy.wait(500);
    cy.get('#GpBA7').click(); cy.wait(500);
    cy.get('#GpBB3').click(); cy.wait(500);
    cy.get('#GpBB4').click(); cy.wait(500);

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpCA9').click(); cy.wait(500);
    cy.get('#GpCA10').click(); cy.wait(500);
    cy.get('#GpCB4').click(); cy.wait(500);
    cy.get('#GpCB5').click(); cy.wait(500);
    cy.get('#GpCB7').click(); cy.wait(500);

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpDA9').click(); cy.wait(500);
    cy.get('#GpDA10').click(); cy.wait(500);
    cy.get('#GpDB4').click(); cy.wait(500);
    cy.get('#GpDB5').click(); cy.wait(500);
    cy.get('#GpDB7').click(); cy.wait(500);

    cy.wait(1000);
    cy.contains('Proximo').click();

    cy.get('#GpEA1').click(); cy.wait(500);
    cy.get('#GpEA2').click(); cy.wait(500);
    cy.get('#GpEB7').click(); cy.wait(500);
    cy.get('#GpEB9').click(); cy.wait(500);

    cy.wait(1000);
    cy.contains('Enviar').click();
    cy.wait(1500);
    cy.contains('Sim').click();

    cy.wait(1500);

    cy.get(':nth-child(1) > #dropdownMenuButton').click();
    cy.wait(1500);

    cy.get(':nth-child(2) > #dropdownMenuButton').click();
    cy.wait(1500);

    cy.get(':nth-child(3) > #dropdownMenuButton').click();
    cy.wait(1500);

    cy.get(':nth-child(4) > #dropdownMenuButton').click();
    cy.wait(1500);

    cy.get(':nth-child(5) > #dropdownMenuButton').click();
    cy.wait(1500);

    cy.get('.btn > strong').click();

};

