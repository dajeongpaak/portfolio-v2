
import styles from './ValuesAndInterest.module.scss'
import SubTitle from './shared/SubTitle'

function ValuesAndInterest() {
  return (
    <section className={`${styles.section} wrapper grid`}>
        <div className={`${styles.interests} col-12 col-lg-6`}>
            <SubTitle title='In My Free Time'/>
            <div>
                <p>You might catch me</p>
                <p className={`h5 ${styles.hobbies}`}>
                    Running, Climbing, Snowboarding, <br />
                    Playing boardgames with my roommate <br />
                    after Cooking and Enjoying new dishes, <br />
                    On the beach in summer days
                </p>
            </div>
        </div>
        <div className={`${styles.belief} col-12 col-lg-6`}>
            <SubTitle title='what i believe'/>
            <ul className='h5'>
              <li>- Happiness and positivity are contagious. </li>
              <li>- Actions speak louder than words. </li>
              <li>- You learn something new every day. </li>
            </ul>
        </div>
        <div className={`${styles.values} col-12`}>
            <SubTitle title='values'/>
            <ul>
                <li>
                    <h4>Optimism</h4>
                    <p>
                        When I encounter challenges in general I see them as opportunities for growth and learning. It helps me maintain resilience and motivation.
                    </p>
                </li>
                <li>
                    <h4>Helpfulness</h4>
                    <p>
                        I have a genuine passion for helping others, when working in a team, a strong desire to be helpful is the key for me to build trust among team members and foster a positive work environment.
                    </p>
                </li>
                <li>
                    <h4>Curiosity</h4>
                    <p>
                        “What if” clauses are always driving me to learn more and embrace challenges. It has been a good starting point to explore the possibility of implementing something new on projects or even making life decisions.
                    </p>
                </li>
            </ul>
        </div>
    </section>
  )
}

export default ValuesAndInterest
