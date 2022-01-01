describe('Edit Assignment', () => {
    beforeEach(() => {
        // Sign in        
        cy.visit('/')
        cy.get('#btn-sign-in').click()
        cy.get('input[name=username]').type('nargyanti')
        cy.get('input[name=password]').type('12345678')
        cy.get('#sign-in-form').submit()
        cy.get('#nav-assignment').click()
        cy.get('a').contains('Details >').click()
        cy.get('button').contains('Edit').click()
        // cy.get('button').should('contain', 'Save') // Check if it's on the create assignment page
    })

    afterEach(() => {
        // Sign out                
        cy.get('#dropdownMenuButton').click()
        cy.get('.dropdown-item').contains('Sign Out').click()            
    })

    it('Fill all data with correct fields', function () {
        cy.get('input[name=due_date]').type('2021-10-29')
        cy.get('input[name=due_time]').type('11:00')
        cy.get('input[name=name]').clear().type('UTS Software Testing')
        cy.get('input[name=course]').clear().type('Software Testing')
        cy.get('input[name=submit_location]').clear().type('LMS')
        cy.get('textarea[name=description]').clear().type('UTS Software Testing')
        cy.get('select[name=level]').select('Easy')
        cy.get('input[name=estimation]').clear().type('5')
        cy.get('#edit-assignment-form').submit()
        cy.get('p').should('contain', 'Assignment Successfully Updated')
    })

    it('Fill the data with the correct fields by leaving some nullable values empty', function () {        
        cy.get('input[name=due_date]').type('2021-10-29')
        cy.get('input[name=due_time]').type('12:00')
        cy.get('input[name=name]').clear().type('UTS Business Intelligent')
        cy.get('input[name=course]').clear().type('Business Intelligent')
        cy.get('input[name=submit_location]').clear()
        cy.get('textarea[name=description]').clear()
        cy.get('select[name=level]').select('Medium')
        cy.get('input[name=estimation]').clear().type('4')
        cy.get('#edit-assignment-form').submit()
        cy.get('p').should('contain', 'Assignment Successfully Updated')
    })

    it('Fill the data with NULL value', function () {                
        cy.get('input[name=due_date]').clear()
        cy.get('input[name=due_time]').clear()
        cy.get('input[name=name]').clear()
        cy.get('input[name=course]').clear()
        cy.get('input[name=submit_location]').clear()
        cy.get('textarea[name=description]').clear()
        cy.get('select[name=level]').select('Medium')
        cy.get('input[name=estimation]').clear()
        cy.get('#edit-assignment-form').submit()
        cy.get('strong').should('contain', 'Whoops!')        
    })
})